import './_template-customizer/_template-customizer.scss'
import customizerMarkup from './_template-customizer/_template-customizer.html?raw'

const CONTROLS = [
  'color',
  'theme',
  'skins',
  'semiDark',
  'contentLayout',
  'headerType',
  'layoutCollapsed',
  'layoutNavbarOptions',
  'rtl',
  'layoutFooterFixed',
  'showDropdownOnHover'
]
const THEMES = ['light', 'dark', 'system']
let layoutNavbarVar
const cl = document.documentElement.classList

if (cl.contains('layout-navbar-fixed')) layoutNavbarVar = 'sticky'
else if (cl.contains('layout-navbar-hidden')) layoutNavbarVar = 'hidden'
else layoutNavbarVar = 'static'

const DISPLAY_CUSTOMIZER = true
const DEFAULT_THEME = document.documentElement.getAttribute('data-bs-theme') || 'light'
const DEFAULT_SKIN = document.getElementsByTagName('HTML')[0].getAttribute('data-skin') || 0
const DEFAULT_CONTENT_LAYOUT = cl.contains('layout-wide') ? 'wide' : 'compact'

let headerType
if (cl.contains('layout-menu-offcanvas')) {
  headerType = 'static-offcanvas'
} else if (cl.contains('layout-menu-fixed')) {
  headerType = 'fixed'
} else if (cl.contains('layout-menu-fixed-offcanvas')) {
  headerType = 'fixed-offcanvas'
} else {
  headerType = 'static'
}
const DEFAULT_HEADER_TYPE = headerType
const DEFAULT_MENU_COLLAPSED = !!cl.contains('layout-menu-collapsed')
const DEFAULT_NAVBAR_FIXED = layoutNavbarVar
const DEFAULT_TEXT_DIR = document.documentElement.getAttribute('dir') === 'rtl'
const DEFAULT_FOOTER_FIXED = !!cl.contains('layout-footer-fixed')
const DEFAULT_SHOW_DROPDOWN_ON_HOVER = true
let primaryColorFlag

const rootStyles = getComputedStyle(document.documentElement)

class TemplateCustomizer {
  constructor({
    displayCustomizer,
    lang,
    defaultPrimaryColor,
    defaultSkin,
    defaultTheme,
    defaultSemiDark,
    defaultContentLayout,
    defaultHeaderType,
    defaultMenuCollapsed,
    defaultNavbarType,
    defaultTextDir,
    defaultFooterFixed,
    defaultShowDropdownOnHover,
    controls,
    themes,
    availableColors,
    availableSkins,
    availableThemes,
    availableContentLayouts,
    availableHeaderTypes,
    availableMenuCollapsed,
    availableNavbarOptions,
    availableDirections,
    onSettingsChange
  }) {
    if (this._ssr) return
    if (!window.Helpers) throw new Error('window.Helpers required.')
    this.settings = {}
    this.settings.displayCustomizer = typeof displayCustomizer !== 'undefined' ? displayCustomizer : DISPLAY_CUSTOMIZER
    this.settings.lang = lang || 'en'
    if (defaultPrimaryColor) {
      this.settings.defaultPrimaryColor = defaultPrimaryColor
      primaryColorFlag = true
    } else {
      this.settings.defaultPrimaryColor = rootStyles.getPropertyValue('--bs-primary').trim()
      primaryColorFlag = false
    }
    this.settings.defaultTheme = defaultTheme || DEFAULT_THEME
    this.settings.defaultSemiDark = typeof defaultSemiDark !== 'undefined' ? defaultSemiDark : false
    this.settings.defaultContentLayout =
      typeof defaultContentLayout !== 'undefined' ? defaultContentLayout : DEFAULT_CONTENT_LAYOUT
    this.settings.defaultHeaderType = defaultHeaderType || DEFAULT_HEADER_TYPE
    this.settings.defaultMenuCollapsed =
      typeof defaultMenuCollapsed !== 'undefined' ? defaultMenuCollapsed : DEFAULT_MENU_COLLAPSED
    this.settings.defaultNavbarType =
      typeof defaultNavbarType !== 'undefined' ? defaultNavbarType : DEFAULT_NAVBAR_FIXED
    this.settings.defaultTextDir = defaultTextDir === 'rtl' ? true : false || DEFAULT_TEXT_DIR
    this.settings.defaultFooterFixed =
      typeof defaultFooterFixed !== 'undefined' ? defaultFooterFixed : DEFAULT_FOOTER_FIXED
    this.settings.defaultShowDropdownOnHover =
      typeof defaultShowDropdownOnHover !== 'undefined' ? defaultShowDropdownOnHover : DEFAULT_SHOW_DROPDOWN_ON_HOVER
    this.settings.controls = controls || CONTROLS

    this.settings.availableColors = availableColors || TemplateCustomizer.COLORS
    this.settings.availableSkins = availableSkins || TemplateCustomizer.SKINS
    this.settings.availableThemes = availableThemes || TemplateCustomizer.THEMES
    this.settings.availableContentLayouts = availableContentLayouts || TemplateCustomizer.CONTENT
    this.settings.availableHeaderTypes = availableHeaderTypes || TemplateCustomizer.HEADER_TYPES
    this.settings.availableMenuCollapsed = availableMenuCollapsed || TemplateCustomizer.LAYOUTS
    this.settings.availableNavbarOptions = availableNavbarOptions || TemplateCustomizer.NAVBAR_OPTIONS
    this.settings.availableDirections = availableDirections || TemplateCustomizer.DIRECTIONS
    this.settings.defaultSkin = this._getDefaultSkin(typeof defaultSkin !== 'undefined' ? defaultSkin : DEFAULT_SKIN)

    this.settings.themes = themes || THEMES

    if (this.settings.themes.length < 2) {
      const i = this.settings.controls.indexOf('theme')
      if (i !== -1) {
        this.settings.controls = this.settings.controls.slice(0, i).concat(this.settings.controls.slice(i + 1))
      }
    }
    this.settings.onSettingsChange = typeof onSettingsChange === 'function' ? onSettingsChange : () => {}

    this._loadSettings()

    this._listeners = []
    this._controls = {}

    this._initDirection()
    this.setContentLayout(this.settings.contentLayout, false)
    this.setHeaderType(this.settings.headerType, false)
    this.setLayoutNavbarOption(this.settings.layoutNavbarOptions, false)
    this.setLayoutFooterFixed(this.settings.layoutFooterFixed, false)
    this.setDropdownOnHover(this.settings.showDropdownOnHover, false)
    this._setup()
  }

  setColor(color, defaultChange = false) {
    // Check if color is actually different from current setting
    const currentColor = this._getSetting('PrimaryColor')
    const defaultPrimaryColor = TemplateCustomizer.COLORS[0].color

    // Only apply changes if color is different or being explicitly set (defaultChange)
    if (color && (color !== currentColor || defaultChange)) {
      // Use Helpers method
      window.Helpers.setColor(color, defaultChange)

      // Save color in cookie
      const isAdmin = this._isAdminLayout()
      const cookieName = isAdmin ? 'admin-primaryColor' : 'front-primaryColor'

      // If color is the default, remove the cookie to use CSS default
      if (color === defaultPrimaryColor && !defaultChange) {
        this._deleteCookie(cookieName)
      } else {
        this._setCookie(cookieName, color, 365)
      }

      // Save to settings
      this._setSetting('PrimaryColor', color)
    }

    // Update color picker UI
    const colorOptions = document.querySelectorAll(
      '.template-customizer-color .template-customizer-colors-options input[type="radio"]'
    )
    let foundMatchingOption = false

    // First check if this is one of the predefined color options
    colorOptions.forEach(option => {
      const isMatch = option.value === color
      option.checked = isMatch
      if (isMatch) {
        foundMatchingOption = true
        if (typeof window.Helpers.updateCustomOptionCheck === 'function') {
          window.Helpers.updateCustomOptionCheck(option)
        }
      }
    })

    // If no predefined color matches, select the picker option
    if (!foundMatchingOption) {
      const pickerOption = document.querySelector('.template-customizer-colors-options input[value="picker"]')
      if (pickerOption) {
        pickerOption.checked = true
        if (typeof window.Helpers.updateCustomOptionCheck === 'function') {
          window.Helpers.updateCustomOptionCheck(pickerOption)
        }

        // Update picker button color
        const pcrButton = document.querySelector('.custom-option-content .pcr-button')
        if (pcrButton) {
          pcrButton.style.setProperty('--pcr-color', color)
        }
      }
    }

    // Trigger settings change callback
  }

  setTheme(theme) {
    const layoutName = this._getLayoutName()
    const isAdmin = !layoutName.includes('front')
    this._setSetting('Theme', theme)

    const modeCookieName = isAdmin ? 'admin-mode' : 'front-mode'
    const colorPrefCookieName = isAdmin ? 'admin-colorPref' : 'front-colorPref'

    if (theme !== '' && this._checkCookie(modeCookieName)) {
      if (theme === 'system') {
        this._setCookie(modeCookieName, 'system', 365)
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
          this._setCookie(colorPrefCookieName, 'dark', 365)
        } else {
          this._setCookie(colorPrefCookieName, 'light', 365)
        }
      } else {
        if (theme === 'dark') {
          this._setCookie(modeCookieName, 'dark', 365)
          this._setCookie(colorPrefCookieName, 'dark', 365)
        } else {
          this._setCookie(modeCookieName, 'light', 365)
          this._setCookie(colorPrefCookieName, 'light', 365)
        }
      }
    } else {
      this._setCookie(modeCookieName, theme || 'light', 365)
    }
  }

  setSkin(skinName, updateStorage = true, cb = null) {
    if (!this._hasControls('skins')) return

    let skin
    // If skin is a number or numeric string, find skin by id
    if (!isNaN(parseInt(skinName))) {
      const skinId = parseInt(skinName)
      skin = this.settings.availableSkins.find(s => s.id === skinId)
      // If found by ID, use that skin
      if (!skin) return
      skinName = skin.name // Convert ID to name for further processing
    } else {
      // Otherwise find skin by name
      skin = this.settings.availableSkins.find(s => s.name === skinName)
      if (!skin) return
    }

    this.settings.skin = skin

    // Update skin radio inputs in the customizer UI
    const skinRadios = document.querySelectorAll('.template-customizer-skin-options input[type="radio"]')
    if (skinRadios.length) {
      skinRadios.forEach(radio => {
        if (radio.value === skin.name) {
          radio.checked = true
          // If using custom options, update those too
          const customOptionEl = radio.closest('.custom-option')
          if (customOptionEl && window.Helpers && typeof window.Helpers.updateCustomOptionCheck === 'function') {
            window.Helpers.updateCustomOptionCheck(radio)
          }
        } else {
          radio.checked = false
        }
      })
    }

    // Set data attribute
    document.documentElement.setAttribute('data-skin', skin.name)

    // Only set cookie for admin layouts
    if (updateStorage) {
      // Set localStorage
      this._setSetting('Skin', skinName)

      // Only set cookie in admin layout
      if (this._isAdminLayout()) {
        // Use standardized cookie name
        this._setCookie('customize_skin', skin.name, 365)
      }

      this.settings.onSettingsChange.call(this, this.settings)
    }

    if (cb) {
      cb()
    }
  }

  setLayoutNavbarOption(navbarType, updateStorage = true) {
    if (!this._hasControls('layoutNavbarOptions')) return
    this.settings.layoutNavbarOptions = navbarType
    if (updateStorage) this._setSetting('FixedNavbarOption', navbarType)

    window.Helpers.setNavbar(navbarType)

    if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)
  }

  setContentLayout(contentLayout, updateStorage = true) {
    if (!this._hasControls('contentLayout')) return
    this.settings.contentLayout = contentLayout
    if (updateStorage) this._setSetting('contentLayout', contentLayout)

    window.Helpers.setContentLayout(contentLayout)

    if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)
  }

  setHeaderType(pos, updateStorage = true) {
    if (!this._hasControls('headerType')) return
    if (!['static', 'static-offcanvas', 'fixed', 'fixed-offcanvas'].includes(pos)) return

    this.settings.headerType = pos
    if (updateStorage) this._setSetting('HeaderType', pos)

    window.Helpers.setPosition(
      pos === 'fixed' || pos === 'fixed-offcanvas',
      pos === 'static-offcanvas' || pos === 'fixed-offcanvas'
    )

    if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)

    // Perfect Scrollbar change on Layout change
    let menuScroll = window.Helpers.menuPsScroll
    const PerfectScrollbarLib = window.PerfectScrollbar

    if (this.settings.headerType === 'fixed' || this.settings.headerType === 'fixed-offcanvas') {
      // Set perfect scrollbar wheelPropagation false for fixed layout
      if (PerfectScrollbarLib && menuScroll) {
        window.Helpers.menuPsScroll.destroy()
        menuScroll = new PerfectScrollbarLib(document.querySelector('.menu-inner'), {
          suppressScrollX: true,
          wheelPropagation: false
        })
        window.Helpers.menuPsScroll = menuScroll
      }
    } else if (menuScroll) {
      // Destroy perfect scrollbar for static layout
      window.Helpers.menuPsScroll.destroy()
    }
  }

  setLayoutFooterFixed(fixed, updateStorage = true) {
    // if (!this._hasControls('layoutFooterFixed')) return
    this.settings.layoutFooterFixed = fixed
    if (updateStorage) this._setSetting('FixedFooter', fixed)

    window.Helpers.setFooterFixed(fixed)

    if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)
  }

  setDropdownOnHover(open, updateStorage = true) {
    if (!this._hasControls('showDropdownOnHover')) return

    // Convert to boolean if string
    const isOpen = typeof open === 'string' ? open === 'true' : Boolean(open)

    this.settings.showDropdownOnHover = isOpen

    // Only proceed if we're in a horizontal layout
    if (document.querySelector('.layout-menu-horizontal.menu, .layout-menu-horizontal .menu')) {
      if (window.Helpers.mainMenu) {
        window.Helpers.mainMenu.destroy()

        const { Menu } = window
        window.Helpers.mainMenu = new Menu(document.getElementById('layout-menu'), {
          orientation: 'horizontal',
          closeChildren: true,
          showDropdownOnHover: isOpen
        })
      }

      // Set localStorage
      if (updateStorage) {
        this._setSetting('ShowDropdownOnHover', isOpen)
        // Set cookie with standardized name
        this._setCookie('showDropdownOnHover', isOpen.toString(), 365)
      }

      if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)
    }
  }

  setRtl(rtl) {
    if (!this._hasControls('rtl')) return
    this._setSetting('Rtl', String(rtl))
    this._setCookie('direction', rtl ? 'true' : 'false', 365)
  }

  setLang(lang, updateStorage = true, force = false) {
    if (lang === this.settings.lang && !force) return
    if (!TemplateCustomizer.LANGUAGES[lang]) throw new Error(`Language "${lang}" not found!`)

    const t = TemplateCustomizer.LANGUAGES[lang]

    ;[
      'panel_header',
      'panel_sub_header',
      'theming_header',
      'color_label',
      'theme_label',
      'style_switch_light',
      'style_switch_dark',
      'layout_header',
      'layout_label',
      'layout_header_label',
      'content_label',
      'layout_static',
      'layout_offcanvas',
      'layout_fixed',
      'layout_fixed_offcanvas',
      'layout_dd_open_label',
      'layout_navbar_label',
      'layout_footer_label',
      'misc_header',
      'skin_label',
      'semiDark_label',
      'direction_label'
    ].forEach(key => {
      const el = this.container.querySelector(`.template-customizer-t-${key}`)
      // eslint-disable-next-line no-unused-expressions
      el && (el.textContent = t[key])
    })

    this.settings.lang = lang

    if (updateStorage) this._setSetting('Lang', lang)

    if (updateStorage) this.settings.onSettingsChange.call(this, this.settings)
  }

  // Update theme settings control
  update() {
    if (this._ssr) return

    const hasNavbar = !!document.querySelector('.layout-navbar')
    const hasMenu = !!document.querySelector('.layout-menu')
    const hasHorizontalMenu = !!document.querySelector('.layout-menu-horizontal.menu, .layout-menu-horizontal .menu')
    const hasFooter = !!document.querySelector('.content-footer')

    if (this._controls.showDropdownOnHover) {
      if (hasMenu) {
        this._controls.showDropdownOnHover.setAttribute('disabled', 'disabled')
        this._controls.showDropdownOnHover.classList.add('disabled')
      } else {
        this._controls.showDropdownOnHover.removeAttribute('disabled')
        this._controls.showDropdownOnHover.classList.remove('disabled')
      }
    }

    if (this._controls.layoutNavbarOptions) {
      if (!hasNavbar) {
        this._controls.layoutNavbarOptions.setAttribute('disabled', 'disabled')
        this._controls.layoutNavbarOptionsW.classList.add('disabled')
      } else {
        this._controls.layoutNavbarOptions.removeAttribute('disabled')
        this._controls.layoutNavbarOptionsW.classList.remove('disabled')
      }

      //  Horizontal menu fixed layout - disabled fixed navbar switch
      if (hasHorizontalMenu && hasNavbar && this.settings.headerType === 'fixed') {
        this._controls.layoutNavbarOptions.setAttribute('disabled', 'disabled')
        this._controls.layoutNavbarOptionsW.classList.add('disabled')
      }
    }

    if (this._controls.layoutFooterFixed) {
      if (!hasFooter) {
        this._controls.layoutFooterFixed.setAttribute('disabled', 'disabled')
        this._controls.layoutFooterFixedW.classList.add('disabled')
      } else {
        this._controls.layoutFooterFixed.removeAttribute('disabled')
        this._controls.layoutFooterFixedW.classList.remove('disabled')
      }
    }

    if (this._controls.headerType) {
      // Disable menu layouts options if menu (vertical or horizontal) is not there
      if (hasMenu || hasHorizontalMenu) {
        // (Updated condition)
        this._controls.headerType.removeAttribute('disabled')
      } else {
        this._controls.headerType.setAttribute('disabled', 'disabled')
      }
    }
  }

  // Clear local storage
  clearLocalStorage() {
    if (this._ssr) return

    // Clear all local storage settings
    const layoutName = this._getLayoutName()
    const keysToRemove = [
      'Color',
      'Theme',
      'Skin',
      'SemiDark',
      'LayoutCollapsed',
      'FixedNavbarOption',
      'HeaderType',
      'contentLayout',
      'Rtl',
      'Lang'
    ]

    keysToRemove.forEach(key => {
      const localStorageKey = `templateCustomizer-${layoutName}--${key}`
      localStorage.removeItem(localStorageKey)
    })

    // Clear all cookies
    const cookiesToClear = [
      // Standardized cookie names
      'customize_skin',
      'customize_semi_dark',
      'direction',
      'LayoutCollapsed',
      'contentLayout',
      'navbarType',
      'headerType',
      // Legacy cookie names for backward compatibility
      'admin-mode',
      'front-mode',
      'admin-colorPref',
      'front-colorPref',
      'admin-primaryColor',
      'front-primaryColor'
    ]

    cookiesToClear.forEach(cookie => {
      this._deleteCookie(cookie)
    })

    this._showResetBtnNotification(false)
  }

  // Clear local storage
  destroy() {
    if (this._ssr) return

    this._cleanup()

    this.settings = null
    this.container.parentNode.removeChild(this.container)
    this.container = null
  }

  _loadSettings() {
    // Get settings
    const rtlOption = this._getSetting('Rtl')
    const color = this._getSetting('Color')
    const theme = this._getSetting('Theme')
    const skin = this._getSetting('Skin')
    const semiDark = this._getSetting('SemiDark') // Default value will be set from main.js
    const contentLayout = this._getSetting('contentLayout')
    const collapsedMenu = this._getSetting('LayoutCollapsed') // Value will be set from main.js
    const dropdownOnHover = this._getSetting('ShowDropdownOnHover') // Value will be set from main.js
    const navbarOption = this._getSetting('FixedNavbarOption')
    const fixedFooter = this._getSetting('FixedFooter')
    const layoutType = this._getSetting('HeaderType')

    const layoutName = this._getLayoutName()
    const isAdmin = !layoutName.includes('front')

    const modeCookieName = isAdmin ? 'admin-mode' : 'front-mode'
    const colorPrefCookieName = isAdmin ? 'admin-colorPref' : 'front-colorPref'

    // Get dropdown hover state from cookie or fall back to localStorage then default
    const dropdownHoverCookie = this._getCookie('showDropdownOnHover')
    const dropdownHoverValue =
      dropdownHoverCookie !== null
        ? dropdownHoverCookie === 'true'
        : dropdownOnHover
          ? dropdownOnHover === 'true'
          : this.settings.defaultShowDropdownOnHover

    // Reset Button
    if (
      rtlOption ||
      theme ||
      skin ||
      contentLayout ||
      collapsedMenu ||
      navbarOption ||
      layoutType ||
      color ||
      semiDark
    ) {
      this._showResetBtnNotification(true)
    } else {
      this._showResetBtnNotification(false)
    }

    // Header Type

    this.settings.headerType = ['static', 'static-offcanvas', 'fixed', 'fixed-offcanvas'].includes(layoutType)
      ? layoutType
      : this.settings.defaultHeaderType

    // ! Set settings by following priority: Local Storage, Theme Config, HTML Classes
    this.settings.rtl = rtlOption !== '' ? rtlOption === 'true' : this.settings.defaultTextDir

    // Color
    if (color) {
      primaryColorFlag = true
    }
    this.settings.color = color || this.settings.defaultPrimaryColor

    this.setColor(this.settings.color, primaryColorFlag)

    // Style
    this.settings.themesOpt = this.settings.themes.includes(theme) ? theme : this.settings.defaultTheme

    // Get the systemTheme value using JS
    const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'

    // appliedTheme will be used to set the theme based on the settings, we keep this separate as we can't set 'system' or 'system' in data-bs-theme
    let appliedTheme
    if (this.settings.themes.includes(theme)) {
      appliedTheme = theme === 'system' ? systemTheme : theme
    } else if (this.settings.defaultTheme === 'system') {
      appliedTheme = systemTheme
    } else {
      appliedTheme = this.settings.defaultTheme
    }

    this.settings.theme = this.settings.defaultTheme
    document.documentElement.setAttribute('data-bs-theme', appliedTheme)

    if (this._getCookie(modeCookieName) === 'system') {
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        this._setCookie(colorPrefCookieName, 'dark', 365)
        this.settings.theme = 'dark'
      } else {
        this._setCookie(colorPrefCookieName, 'light', 365)
        this.settings.theme = 'light'
      }
    } else {
      if (this.settings.themesOpt === 'system') {
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
          this.settings.theme = 'dark'
        } else {
          this.settings.theme = 'light'
        }
      } else {
        this.settings.theme = this.settings.themes.includes(theme) ? theme : this.settings.themesOpt
      }
    }

    // Retrieve skin from multiple sources in order of priority:
    // 1. localStorage via _getSetting('Skin')
    // 2. Cookie value
    // 3. Default skin from constructor
    const storedSkin = this._getSetting('Skin')

    // Only process special skin/semiDark settings for admin layouts
    if (this._isAdminLayout()) {
      // Use standardized cookie name
      const skinCookieName = 'customize_skin'
      const skinFromCookie = this._getCookie(skinCookieName)
      const skinFromAttribute = document.documentElement.getAttribute('data-skin')

      // Use first available source in priority order
      const skinToUse = storedSkin || skinFromCookie || skinFromAttribute || this.settings.defaultSkin.name
      this.settings.skin = this._getSkinByName(skinToUse, true)

      // Ensure HTML element has the correct data-skin attribute
      if (this.settings.skin && this.settings.skin.name) {
        document.documentElement.setAttribute('data-skin', this.settings.skin.name)
      }

      // Semi Dark - only for admin layouts
      // First check localStorage, then cookie, then fallback to default
      const storedSemiDark = this._getSetting('SemiDark')
      const semiDarkCookieName = 'customize_semi_dark'
      const semiDarkFromCookie = this._getCookie(semiDarkCookieName)

      // Use first available source in priority order and convert to proper boolean
      const semiDarkValue = storedSemiDark || semiDarkFromCookie || this.settings.defaultSemiDark.toString()
      // Convert string value to boolean
      this.settings.semiDark = semiDarkValue === 'true'

      // Apply semi-dark setting to DOM
      if (this.settings.semiDark) {
        document.documentElement.setAttribute('data-semidark-menu', true)
        const menuElement = document.getElementById('layout-menu')
        if (menuElement) {
          menuElement.setAttribute('data-bs-theme', 'dark')
        }
      }
    } else {
      // For front-end layouts, use default skin and turn off semiDark
      this.settings.skin = this._getSkinByName('default', true)
      document.documentElement.setAttribute('data-skin', 'default')
      this.settings.semiDark = false
      document.documentElement.removeAttribute('data-semidark-menu')
    }

    // Content Layout
    this.settings.contentLayout = contentLayout || this.settings.defaultContentLayout

    // Layout Collapsed
    this.settings.layoutCollapsed = collapsedMenu ? collapsedMenu === 'true' : this.settings.defaultMenuCollapsed
    // Add layout-menu-collapsed class to the body if the menu is collapsed
    if (this.settings.layoutCollapsed) document.documentElement.classList.add('layout-menu-collapsed')

    // Dropdown on Hover - only enable for horizontal layout
    if (document.querySelector('.layout-menu-horizontal.menu, .layout-menu-horizontal .menu')) {
      this.settings.showDropdownOnHover = dropdownHoverValue
      // Initialize menu with current setting
      if (window.Helpers.mainMenu) {
        window.Helpers.mainMenu.destroy()
        const { Menu } = window
        window.Helpers.mainMenu = new Menu(document.getElementById('layout-menu'), {
          orientation: 'horizontal',
          closeChildren: true,
          showDropdownOnHover: dropdownHoverValue
        })
      }
    } else {
      this.settings.showDropdownOnHover = false
    }

    // Navbar Option
    this.settings.layoutNavbarOptions = ['static', 'sticky', 'hidden'].includes(navbarOption)
      ? navbarOption
      : this.settings.defaultNavbarType

    // Footer Fixed
    this.settings.layoutFooterFixed = fixedFooter ? fixedFooter === 'true' : this.settings.defaultFooterFixed

    // Filter options depending on available controls
    if (!this._hasControls('rtl')) this.settings.rtl = document.documentElement.getAttribute('dir') === 'rtl'
    if (!this._hasControls('theme')) this.settings.theme = window.Helpers.isDarkStyle() ? 'dark' : 'light'
    if (!this._hasControls('contentLayout')) this.settings.contentLayout = null
    if (!this._hasControls('headerType')) this.settings.headerType = null
    if (!this._hasControls('layoutCollapsed')) this.settings.layoutCollapsed = null
    if (!this._hasControls('layoutNavbarOptions')) this.settings.layoutNavbarOptions = null
    if (!this._hasControls('skins')) this.settings.skin = null
    if (!this._hasControls('semiDark')) this.settings.semiDark = null
  }

  // Setup theme settings controls and events
  _setup(_container = document) {
    // Function to create customizer elements
    const createOptionElement = (nameVal, title, inputName, image, isIcon = false) => {
      const divElement = document.createElement('div')
      divElement.classList.add('col-4', 'px-2')

      // Determine the correct classes based on whether it's an icon or image
      const optionClass = isIcon
        ? 'custom-option custom-option-icon'
        : 'custom-option custom-option-image custom-option-image-radio'

      // Create the inner HTML structure
      divElement.innerHTML = `
        <div class="form-check ${optionClass} mb-0">
          <label class="form-check-label custom-option-content p-0" for="${inputName}${nameVal}">
            <span class="custom-option-body mb-0 scaleX-n1-rtl"></span>
          </label>
          <input
            name="${inputName}"
            class="form-check-input d-none"
            type="radio"
            value="${nameVal}"
            id="${inputName}${nameVal}" />
        </div>
        <label class="form-check-label small text-nowrap text-body" for="${inputName}${nameVal}">${title}</label>
      `

      if (isIcon) {
        // If it's an icon, insert the icon HTML directly
        divElement.querySelector('.custom-option-body').innerHTML = image
      } else {
        // Otherwise, assume it's an SVG file name and fetch its content
        fetch(`${assetsPath}img/customizer/${image}`)
          .then(response => response.text())
          .then(svgContent => {
            // Insert the SVG content into the HTML
            divElement.querySelector('.custom-option-body').innerHTML = svgContent
          })
          .catch(error => console.error('Error loading SVG:', error))
      }

      return divElement
    }

    this._cleanup()
    this.container = this._getElementFromString(customizerMarkup)

    // Customizer visibility
    //
    this.container.setAttribute('style', `visibility: ${this.settings.displayCustomizer ? 'visible' : 'hidden'}`)

    // Open btn
    const openBtn = this.container.querySelector('.template-customizer-open-btn')
    const openBtnCb = () => {
      this.container.classList.add('template-customizer-open')
      this.update()

      if (this._updateInterval) clearInterval(this._updateInterval)
      this._updateInterval = setInterval(() => {
        this.update()
      }, 500)
    }
    openBtn.addEventListener('click', openBtnCb)
    this._listeners.push([openBtn, 'click', openBtnCb])

    // Reset btn
    const resetBtn = this.container.querySelector('.template-customizer-reset-btn')
    const resetBtnCb = () => {
      // Just clear all storage and reload the page
      this.clearLocalStorage()
      window.location.reload()
    }
    resetBtn.addEventListener('click', resetBtnCb)
    this._listeners.push([resetBtn, 'click', resetBtnCb])

    // Close btn
    const closeBtn = this.container.querySelector('.template-customizer-close-btn')
    const closeBtnCb = () => {
      this.container.classList.remove('template-customizer-open')

      if (this._updateInterval) {
        clearInterval(this._updateInterval)
        this._updateInterval = null
      }
    }
    closeBtn.addEventListener('click', closeBtnCb)
    this._listeners.push([closeBtn, 'click', closeBtnCb])

    // Color
    const colorW = this.container.querySelector('.template-customizer-color')
    const colorOpt = colorW.querySelector('.template-customizer-colors-options')

    if (!this._hasControls('color')) {
      colorW.parentNode.removeChild(colorW)
    } else {
      const inputName = 'colorRadioIcon'
      this.settings.availableColors.forEach(color => {
        const colorEl = `<div class="form-check custom-option custom-option-icon mb-0">
          <label class="form-check-label custom-option-content p-0" for="${inputName}${color.name}">
            <span class="custom-option-body mb-0 scaleX-n1-rtl" style="background-color: ${color.color};"></span>
          </label>
          <input
            name="${inputName}"
            class="form-check-input d-none"
            type="radio"
            value="${color.color}"
            data-color="${color.color}"
            id="${inputName}${color.name}" />
        </div>`

        // convert colorEl string to HTML element
        const colorEle = this._getElementFromString(colorEl)
        colorOpt.appendChild(colorEle)
      })
      colorOpt.appendChild(
        this._getElementFromString(
          '<div class="form-check custom-option custom-option-icon mb-0"><label class="form-check-label custom-option-content" for="colorRadioIcon"><span class="custom-option-body customizer-nano-picker mb-50"><i class="ti tabler-color-picker icon-base"></i></span></label><input name="colorRadioIcon" class="form-check-input picker d-none" type="radio" value="picker" id="colorRadioIcon" /> </div>'
        )
      )
      const colorSelector = colorOpt.querySelector(`input[value="${this.settings.color}"]`)
      if (colorSelector) {
        colorSelector.setAttribute('checked', 'checked')
        colorOpt.querySelector('input[value="picker"]').removeAttribute('checked')
      } else {
        colorOpt.querySelector('input[value="picker"]').setAttribute('checked', 'checked')
      }

      const colorCb = e => {
        if (e.target.value === 'picker') {
          document.querySelector('.custom-option-content .pcr-button').click()
        } else {
          this._setSetting('Color', e.target.dataset.color)
          this.setColor(
            e.target.dataset.color,
            () => {
              this._loadingState(false)
            },
            true
          )
        }
      }

      colorOpt.addEventListener('change', colorCb)
      this._listeners.push([colorOpt, 'change', colorCb])
    }

    // Theme
    const themeW = this.container.querySelector('.template-customizer-theme')
    const themeOpt = themeW.querySelector('.template-customizer-themes-options')

    if (!this._hasControls('theme')) {
      themeW.parentNode.removeChild(themeW)
    } else {
      this.settings.availableThemes.forEach(theme => {
        const themeEl = createOptionElement(theme.name, theme.title, 'customRadioIcon', theme.image, true)
        themeOpt.appendChild(themeEl)
      })
      if (themeOpt.querySelector(`input[value="${this.settings.themesOpt}"]`)) {
        themeOpt.querySelector(`input[value="${this.settings.themesOpt}"]`).setAttribute('checked', 'checked')
      }

      // themeCb
      const themeCb = e => {
        document.documentElement.setAttribute('data-bs-theme', e.target.value)
        if (this._hasControls('semiDark')) {
          const semiDarkL = this.container.querySelector('.template-customizer-semiDark')
          if (e.target.value === 'dark') {
            semiDarkL.classList.add('d-none')
          } else {
            semiDarkL.classList.remove('d-none')
          }
        }

        // Update below commented code for data-bs-theme-value attribute value matches with e.target.value
        window.Helpers.syncThemeToggles(e.target.value)

        this.setTheme(e.target.value, true, () => {
          this._loadingState(false)
        })
      }

      themeOpt.addEventListener('change', themeCb)
      this._listeners.push([themeOpt, 'change', themeCb])
    }

    // Skin
    const skinsW = this.container.querySelector('.template-customizer-skins')
    const skinsWInner = skinsW.querySelector('.template-customizer-skins-options')

    if (!this._hasControls('skins')) {
      skinsW.parentNode.removeChild(skinsW)
    } else {
      this.settings.availableSkins.forEach(skin => {
        const skinEl = createOptionElement(skin.name, skin.title, 'skinRadios', skin.image)
        skinsWInner.appendChild(skinEl)
      })

      // Get the current skin name, either from settings or data attribute
      const currentSkinName = this.settings.skin.name || document.documentElement.getAttribute('data-skin') || 'default'

      // Find the radio button with matching value and mark it checked
      const skinInput = skinsWInner.querySelector(`input[value="${currentSkinName}"]`)
      if (skinInput) {
        skinInput.setAttribute('checked', 'checked')
        // If using custom options, update those too
        const customOptionEl = skinInput.closest('.custom-option')
        if (customOptionEl && window.Helpers && typeof window.Helpers.updateCustomOptionCheck === 'function') {
          window.Helpers.updateCustomOptionCheck(skinInput)
        }
      }

      document.documentElement.setAttribute('data-skin', currentSkinName)

      const skinCb = e => {
        document.documentElement.setAttribute('data-skin', e.target.value)

        this.setSkin(e.target.value, true, () => {
          this._loadingState(false, true)
        })
      }

      skinsWInner.addEventListener('change', skinCb)
      this._listeners.push([skinsWInner, 'change', skinCb])
    }

    // SemiDark
    // update menu's data-bs-theme attribute to dark & light on switch changes on & off respectively
    const semiDarkSwitch = this.container.querySelector('.template-customizer-semi-dark-switch')
    const semiDarkSection = this.container.querySelector('.template-customizer-semiDark')

    if (document.documentElement.getAttribute('data-bs-theme') === 'dark') {
      semiDarkSection.classList.add('d-none')
    }
    if (!this._hasControls('semiDark')) {
      semiDarkSection.remove()
    } else if (this._hasControls('semiDark') && this._getSetting('Theme') === 'dark') {
      semiDarkSwitch.classList.add('d-none')
    } else {
      // Check the switch if semi-dark is enabled
      if (this.settings.semiDark) {
        semiDarkSwitch.checked = true
      } else {
        semiDarkSwitch.checked = false
      }

      const semiDarkSwitchCb = e => {
        const isDark = e.target.checked
        const theme = isDark ? 'dark' : 'light'

        // Check if we're in admin layout - only apply in admin
        if (!this._isAdminLayout()) {
          // Skip for front-end layouts
          return
        }

        if (theme === 'dark') {
          document.getElementById('layout-menu').setAttribute('data-bs-theme', theme)
          document.documentElement.setAttribute('data-semidark-menu', true)
        } else {
          document.getElementById('layout-menu').removeAttribute('data-bs-theme')
          document.documentElement.removeAttribute('data-semidark-menu')
        }

        // Save to localStorage
        this._setSetting('SemiDark', isDark)

        // Save to cookie for server-side access - use standardized cookie name
        this._setCookie('customize_semi_dark', isDark.toString(), 365)
      }
      semiDarkSwitch.addEventListener('change', semiDarkSwitchCb)
      this._listeners.push([semiDarkSwitch, 'change', semiDarkSwitchCb])
    }

    const themingW = this.container.querySelector('.template-customizer-theming')
    if (
      !this._hasControls('color') &&
      !this._hasControls('theme') &&
      !this._hasControls('skins') &&
      !this._hasControls('semiDark')
    ) {
      themingW.parentNode.removeChild(themingW)
    }

    // Layout wrapper
    const layoutW = this.container.querySelector('.template-customizer-layout')

    if (!this._hasControls('contentLayout headerType layoutCollapsed layoutNavbarOptions rtl', true)) {
      layoutW.parentNode.removeChild(layoutW)
    } else {
      // Layouts Collapsed: Expanded, Collapsed
      const layoutCollapsedW = this.container.querySelector('.template-customizer-layouts')

      if (!this._hasControls('layoutCollapsed')) {
        layoutCollapsedW.parentNode.removeChild(layoutCollapsedW)
      } else {
        setTimeout(() => {
          if (document.querySelector('.layout-menu-horizontal')) {
            layoutCollapsedW.parentNode.removeChild(layoutCollapsedW)
          }
        }, 100)
        const layoutCollapsedOpt = layoutCollapsedW.querySelector('.template-customizer-layouts-options')
        this.settings.availableMenuCollapsed.forEach(layoutOpt => {
          const layoutsEl = createOptionElement(layoutOpt.name, layoutOpt.title, 'layoutsRadios', layoutOpt.image)
          layoutCollapsedOpt.appendChild(layoutsEl)
        })
        layoutCollapsedOpt
          .querySelector(`input[value="${this.settings.layoutCollapsed ? 'collapsed' : 'expanded'}"]`)
          .setAttribute('checked', 'checked')

        const layoutCb = e => {
          window.Helpers.setCollapsed(e.target.value === 'collapsed', true)

          this._setSetting('LayoutCollapsed', e.target.value === 'collapsed')
          this._setCookie('LayoutCollapsed', e.target.value === 'collapsed', 365)
        }

        layoutCollapsedOpt.addEventListener('change', layoutCb)
        this._listeners.push([layoutCollapsedOpt, 'change', layoutCb])
      }

      // CONTENT
      const contentWrapper = this.container.querySelector('.template-customizer-content')
      // ? Hide RTL control in following 2 case
      if (!this._hasControls('contentLayout')) {
        contentWrapper.parentNode.removeChild(contentWrapper)
      } else {
        const contentOpt = contentWrapper.querySelector('.template-customizer-content-options')
        this.settings.availableContentLayouts.forEach(content => {
          const contentEl = createOptionElement(content.name, content.title, 'contentRadioIcon', content.image)
          contentOpt.appendChild(contentEl)
        })
        contentOpt.querySelector(`input[value="${this.settings.contentLayout}"]`).setAttribute('checked', 'checked')

        const contentCb = e => {
          this._loading = true
          this._loadingState(true, true)
          this.setContentLayout(e.target.value, true, () => {
            this._loading = false
            this._loadingState(false, true)
          })
          this._setCookie('contentLayout', e.target.value, 365)
        }

        contentOpt.addEventListener('change', contentCb)
        this._listeners.push([contentOpt, 'change', contentCb])
      }

      // Header Layout Type
      const headerTypeW = this.container.querySelector('.template-customizer-headerOptions')
      const templateName = document.documentElement.getAttribute('data-template').split('-')
      if (!this._hasControls('headerType')) {
        headerTypeW.parentNode.removeChild(headerTypeW)
      } else {
        const headerOpt = headerTypeW.querySelector('.template-customizer-header-options')
        setTimeout(() => {
          if (templateName.includes('vertical')) {
            headerTypeW.parentNode.removeChild(headerTypeW)
          }
        }, 100)
        this.settings.availableHeaderTypes.forEach(header => {
          const headerEl = createOptionElement(header.name, header.title, 'headerRadioIcon', header.image)
          headerOpt.appendChild(headerEl)
        })
        headerOpt.querySelector(`input[value="${this.settings.headerType}"]`).setAttribute('checked', 'checked')

        const headerTypeCb = e => {
          this.setHeaderType(e.target.value)
          this._setCookie('headerType', e.target.value, 365)
        }
        headerOpt.addEventListener('change', headerTypeCb)
        this._listeners.push([headerOpt, 'change', headerTypeCb])
      }

      // Layout Navbar Options
      const navbarOption = this.container.querySelector('.template-customizer-layoutNavbarOptions')

      if (!this._hasControls('layoutNavbarOptions')) {
        navbarOption.parentNode.removeChild(navbarOption)
      } else {
        setTimeout(() => {
          if (templateName.includes('horizontal')) {
            navbarOption.parentNode.removeChild(navbarOption)
          }
        }, 100)
        const navbarTypeOpt = navbarOption.querySelector('.template-customizer-navbar-options')
        this.settings.availableNavbarOptions.forEach(navbarOpt => {
          const navbarEl = createOptionElement(navbarOpt.name, navbarOpt.title, 'navbarOptionRadios', navbarOpt.image)
          navbarTypeOpt.appendChild(navbarEl)
        })
        // check navbar option from settings
        navbarTypeOpt
          .querySelector(`input[value="${this.settings.layoutNavbarOptions}"]`)
          .setAttribute('checked', 'checked')
        const navbarCb = e => {
          this._loading = true
          this._loadingState(true, true)
          this.setLayoutNavbarOption(e.target.value, true, () => {
            this._loading = false
            this._loadingState(false, true)
          })
          this._setCookie('navbarType', e.target.value, 365)
        }

        navbarTypeOpt.addEventListener('change', navbarCb)
        this._listeners.push([navbarTypeOpt, 'change', navbarCb])
      }

      // RTL
      const directionW = this.container.querySelector('.template-customizer-directions')
      // ? Hide RTL control in following 2 case
      if (!this._hasControls('rtl')) {
        directionW.parentNode.removeChild(directionW)
      } else {
        const directionOpt = directionW.querySelector('.template-customizer-directions-options')
        this.settings.availableDirections.forEach(dir => {
          const dirEl = createOptionElement(dir.name, dir.title, 'directionRadioIcon', dir.image)
          directionOpt.appendChild(dirEl)
        })
        directionOpt
          .querySelector(`input[value="${this.settings.rtl ? 'rtl' : 'ltr'}"]`)
          .setAttribute('checked', 'checked')

        const rtlCb = e => {
          // For demo purpose, we will use EN as LTR and AR as RTL Language
          this._setSetting('Lang', this.settings.lang === 'ar' ? 'en' : 'ar')
          this.settings.rtl = e.target.value === 'rtl'

          // Cache the language setting
          const currentLang = this._getSetting('Lang')
          const languageDropdown = document.querySelector('.dropdown-language .dropdown-menu')
          if (languageDropdown) {
            const dropdownItem = languageDropdown.querySelector(`[data-language="${currentLang}"]`)
            dropdownItem.click()
          }

          // Use querySelector for cleaner and more flexible selection
          this._initDirection()
          this.setRtl(e.target.value === 'rtl', true, () => {
            this._loadingState(false)
          })
          let layoutTemplate = document.documentElement.getAttribute('data-template') || ''
          let isAdmin = !layoutTemplate.includes('front')
          if (isAdmin) {
            if (e.target.value === 'rtl') {
              window.location.href = baseUrl + 'lang/ar'
            } else {
              window.location.href = baseUrl + 'lang/en'
            }
          } else {
            // For front-end layouts, just reload the page
            window.location.reload()
          }
        }

        directionOpt.addEventListener('change', rtlCb)
        this._listeners.push([directionOpt, 'change', rtlCb])
      }
    }

    setTimeout(() => {
      const layoutCustom = this.container.querySelector('.template-customizer-layout')
      const layoutTheme = this.container.querySelector('.template-customizer-theming')

      const checkSemiDarkWrapper = document.documentElement.getAttribute('data-bs-theme')
      let checkSemiDark = false

      if (checkSemiDarkWrapper === 'light' && document.querySelector('.layout-menu')) {
        if (document.querySelector('.layout-menu').getAttribute('data-bs-theme') === 'dark') {
          checkSemiDark = true
        }
        if (checkSemiDark === true) {
          const semiDarkSwitch = layoutTheme.querySelector('.template-customizer-semi-dark-switch')
          semiDarkSwitch.setAttribute('checked', 'checked')
        }
      }

      if (document.querySelector('.menu-vertical')) {
        if (!this._hasControls('rtl contentLayout layoutCollapsed layoutNavbarOptions', true)) {
          if (layoutCustom) {
            layoutCustom.parentNode.removeChild(layoutCustom)
          }
        }
      } else if (document.querySelector('.menu-horizontal')) {
        if (!this._hasControls('rtl contentLayout headerType', true)) {
          if (layoutCustom) {
            layoutCustom.parentNode.removeChild(layoutCustom)
          }
        }
      }
    }, 100)

    // Set language
    this.setLang(this.settings.lang, false, true)

    // Append container
    if (_container === document) {
      if (_container.body) {
        _container.body.appendChild(this.container)
      } else {
        window.addEventListener('DOMContentLoaded', () => _container.body.appendChild(this.container))
      }
    } else {
      _container.appendChild(this.container)
    }
  }

  _initDirection() {
    if (this._hasControls('rtl')) {
      document.documentElement.setAttribute(
        'dir',
        this._checkCookie('direction')
          ? this._getCookie('direction') === 'true'
            ? 'rtl'
            : 'ltr'
          : this.settings.rtl
            ? 'rtl'
            : 'ltr'
      )
    }
  }

  _loadingState(enable, skins) {
    this.container.classList[enable ? 'add' : 'remove'](`template-customizer-loading${skins ? '-theme' : ''}`)
  }

  _getElementFromString(str) {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = str
    return wrapper.firstChild
  }

  // Set settings in LocalStorage with layout & key
  _setSetting(key, val) {
    const layoutName = this._getLayoutName()
    try {
      localStorage.setItem(`templateCustomizer-${layoutName}--${key}`, String(val))
      this._showResetBtnNotification()
    } catch (e) {
      // Catch Error
    }
  }

  // Set settings in LocalStorage with layout & key
  _getSetting(key) {
    let result = null
    const layoutName = this._getLayoutName()
    try {
      result = localStorage.getItem(`templateCustomizer-${layoutName}--${key}`)
    } catch (e) {
      // Catch error
    }
    return String(result || '')
  }

  _showResetBtnNotification(show = true) {
    setTimeout(() => {
      const resetBtnAttr = this.container.querySelector('.template-customizer-reset-btn .badge')
      if (show) {
        resetBtnAttr.classList.remove('d-none')
      } else {
        resetBtnAttr.classList.add('d-none')
      }
    }, 200)
  }

  // Get layout name to set unique
  _getLayoutName() {
    return document.getElementsByTagName('HTML')[0].getAttribute('data-template')
  }

  _removeListeners() {
    for (let i = 0, l = this._listeners.length; i < l; i++) {
      this._listeners[i][0].removeEventListener(this._listeners[i][1], this._listeners[i][2])
    }
  }

  _cleanup() {
    this._removeListeners()
    this._listeners = []
    this._controls = {}

    if (this._updateInterval) {
      clearInterval(this._updateInterval)
      this._updateInterval = null
    }
  }

  get _ssr() {
    return typeof window === 'undefined'
  }

  // Check controls availability
  _hasControls(controls, oneOf = false) {
    return controls.split(' ').reduce((result, control) => {
      if (this.settings.controls.indexOf(control) !== -1) {
        if (oneOf || result !== false) result = true
      } else if (!oneOf || result !== true) result = false
      return result
    }, null)
  }

  // Get the default Skin
  _getDefaultSkin(skinId) {
    const skins = this.settings.availableSkins
    let skin = null

    // If skinId is a number or a string that can be parsed as a number
    if (!isNaN(parseInt(skinId))) {
      const id = parseInt(skinId)
      skin = skins.find(s => s.id === id)
    }
    // If skinId is a string (skin name)
    else if (typeof skinId === 'string') {
      skin = skins.find(s => s.name === skinId)
    }

    // If no skin found by id or name, use first available skin
    if (!skin && skins.length > 0) {
      skin = skins[0]
    }

    if (!skin) {
      throw new Error(`Skin "${skinId}" not found!`)
    }

    return skin
  }

  // Get theme by skinId/skinName
  _getSkinByName(skinName, returnDefault = false) {
    const skins = this.settings.availableSkins

    // If skinName is a valid skin name string, return it directly
    for (let i = 0, l = skins.length; i < l; i++) {
      if (skins[i].name === skinName) return skins[i]
    }

    // If skinName is a number or numeric string, try finding by id
    if (!isNaN(parseInt(skinName))) {
      const id = parseInt(skinName)
      const skinById = skins.find(s => s.id === id)
      if (skinById) return skinById
    }

    // If no match found, return default skin if requested
    if (returnDefault) {
      // First try to find skin with name 'default'
      const defaultSkin = skins.find(s => s.name === 'default')
      if (defaultSkin) return defaultSkin

      // If no skin named 'default', return the first skin
      if (skins.length > 0) return skins[0]

      // If no skins at all, return null
      return null
    }

    return null
  }

  _setCookie(name, value, daysToExpire, path = '/', domain = '') {
    const cookie = `${encodeURIComponent(name)}=${encodeURIComponent(value)}`

    let expires = ''
    if (daysToExpire) {
      const expirationDate = new Date()
      expirationDate.setTime(expirationDate.getTime() + daysToExpire * 24 * 60 * 60 * 1000)
      expires = `; expires=${expirationDate.toUTCString()}`
    }

    const pathString = `; path=${path}`
    const domainString = domain ? `; domain=${domain}` : ''

    document.cookie = `${cookie}${expires}${pathString}${domainString}`
  }

  _getCookie(name) {
    const cookies = document.cookie.split('; ')

    for (let i = 0; i < cookies.length; i++) {
      const [cookieName, cookieValue] = cookies[i].split('=')
      if (decodeURIComponent(cookieName) === name) {
        return decodeURIComponent(cookieValue)
      }
    }

    return null
  }

  _checkCookie(name) {
    return this._getCookie(name) !== null
  }

  _deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;'
  }

  _isAdminLayout() {
    const layoutName = this._getLayoutName()
    return !layoutName.includes('front')
  }
}
// Colors
TemplateCustomizer.COLORS = [
  {
    name: 'primary',
    title: 'Primary',
    color: rootStyles.getPropertyValue('--bs-primary').trim()
  },
  {
    name: 'success',
    title: 'Success',
    color: '#0D9394'
  },
  {
    name: 'warning',
    title: 'Warning',
    color: '#FFAB1D'
  },
  {
    name: 'danger',
    title: 'Danger',
    color: '#EB3D63'
  },
  {
    name: 'info',
    title: 'Info',
    color: '#2092EC'
  }
]

// Themes
TemplateCustomizer.THEMES = [
  {
    name: 'light',
    title: 'Light',
    image: '<i class="ti tabler-sun icon-base mb-0"></i>'
  },
  {
    name: 'dark',
    title: 'Dark',
    image: '<i class="ti tabler-moon icon-base mb-0"></i>'
  },
  {
    name: 'system',
    title: 'System',
    image: '<i class="ti tabler-device-desktop-analytics icon-base mb-0"></i>'
  }
]

// Skins
TemplateCustomizer.SKINS = [
  {
    id: 0,
    name: 'default',
    title: 'Default',
    image: 'skin-default.svg'
  },
  {
    id: 1,
    name: 'bordered',
    title: 'Bordered',
    image: 'skin-border.svg'
  }
  // To add a new skin, simply add a new entry here:
  // Example:
  // {
  //   id: 2,
  //   name: 'raspberry',
  //   title: 'Raspberry',
  //   image: 'skin-border.svg'
  // }
]

// Layouts
TemplateCustomizer.LAYOUTS = [
  {
    name: 'expanded',
    title: 'Expanded',
    image: 'layouts-expanded.svg'
  },
  {
    name: 'collapsed',
    title: 'Collapsed',
    image: 'layouts-collapsed.svg'
  }
]

// Navbar Options
TemplateCustomizer.NAVBAR_OPTIONS = [
  {
    name: 'sticky',
    title: 'Sticky',
    image: 'navbar-sticky.svg'
  },
  {
    name: 'static',
    title: 'Static',
    image: 'navbar-static.svg'
  },
  {
    name: 'hidden',
    title: 'Hidden',
    image: 'navbar-hidden.svg'
  }
]

// Header Types
TemplateCustomizer.HEADER_TYPES = [
  {
    name: 'fixed',
    title: 'Fixed',
    image: 'horizontal-fixed.svg'
  },
  {
    name: 'static',
    title: 'Static',
    image: 'horizontal-static.svg'
  }
]

// Content Types
TemplateCustomizer.CONTENT = [
  {
    name: 'compact',
    title: 'Compact',
    image: 'content-compact.svg'
  },
  {
    name: 'wide',
    title: 'Wide',
    image: 'content-wide.svg'
  }
]

// Directions
TemplateCustomizer.DIRECTIONS = [
  {
    name: 'ltr',
    title: 'Left to Right (En)',
    image: 'direction-ltr.svg'
  },
  {
    name: 'rtl',
    title: 'Right to Left (Ar)',
    image: 'direction-rtl.svg'
  }
]

// Theme setting language
TemplateCustomizer.LANGUAGES = {
  en: {
    panel_header: 'Template Customizer',
    panel_sub_header: 'Customize and preview in real time',
    theming_header: 'Theming',
    color_label: 'Primary Color',
    theme_label: 'Theme',
    skin_label: 'Skins',
    semiDark_label: 'Semi Dark',
    layout_header: 'Layout',
    layout_label: 'Menu (Navigation)',
    layout_header_label: 'Header Types',
    content_label: 'Content',
    layout_navbar_label: 'Navbar Type',
    direction_label: 'Direction'
  },
  fr: {
    panel_header: 'Modèle De Personnalisation',
    panel_sub_header: 'Personnalisez et prévisualisez en temps réel',
    theming_header: 'Thématisation',
    color_label: 'Couleur primaire',
    theme_label: 'Thème',
    skin_label: 'Peaux',
    semiDark_label: 'Demi-foncé',
    layout_header: 'Disposition',
    layout_label: 'Menu (Navigation)',
    layout_header_label: "Types d'en-tête",
    content_label: 'Contenu',
    layout_navbar_label: 'Type de barre de navigation',
    direction_label: 'Direction'
  },
  ar: {
    panel_header: 'أداة تخصيص القالب',
    panel_sub_header: 'تخصيص ومعاينة في الوقت الحقيقي',
    theming_header: 'السمات',
    color_label: 'اللون الأساسي',
    theme_label: 'سمة',
    skin_label: 'جلود',
    semiDark_label: 'شبه داكن',
    layout_header: 'تَخطِيط',
    layout_label: 'القائمة (الملاحة)',
    layout_header_label: 'أنواع الرأس',
    content_label: 'محتوى',
    layout_navbar_label: 'نوع شريط التنقل',
    direction_label: 'اتجاه'
  },
  de: {
    panel_header: 'Vorlagen-Anpasser',
    panel_sub_header: 'Anpassen und Vorschau in Echtzeit',
    theming_header: 'Themen',
    color_label: 'Grundfarbe',
    theme_label: 'Thema',
    skin_label: 'Skins',
    semiDark_label: 'Halbdunkel',
    layout_header: 'Layout',
    layout_label: 'Menü (Navigation)',
    layout_header_label: 'Header-Typen',
    content_label: 'Inhalt',
    layout_navbar_label: 'Art der Navigationsleiste',
    direction_label: 'Richtung'
  }
}

window.TemplateCustomizer = TemplateCustomizer
export { TemplateCustomizer }

/**
 * Initialize color picker functionality for template customization
 * Caches DOM elements and handles color picker setup
 */
const initializeColorPicker = () => {
  // Cache DOM elements
  const elements = {
    pickerWrapper: document.querySelector('.template-customizer-colors-options input[value="picker"]'),
    pickerEl: document.querySelector('.customizer-nano-picker'),
    pcrButton: document.querySelector('.custom-option-content .pcr-button')
  }

  // Early return if required elements missing
  if (!elements.pickerWrapper || !elements.pickerEl) {
    console.warn('Required color picker elements not found')
    return
  }

  // Get the saved color from cookie
  const layoutTemplate = document.documentElement.getAttribute('data-template') || ''
  const isAdmin = !layoutTemplate.includes('front')
  const cookieName = isAdmin ? 'admin-primaryColor' : 'front-primaryColor'

  function getCookie(name) {
    const cookies = document.cookie.split('; ')
    for (let i = 0; i < cookies.length; i++) {
      const [cookieName, cookieValue] = cookies[i].split('=')
      if (decodeURIComponent(cookieName) === name) {
        return decodeURIComponent(cookieValue)
      }
    }
    return null
  }

  // First check if picker is checked
  const isPrickerChecked =
    elements.pickerWrapper.checked || elements.pickerWrapper.getAttribute('checked') === 'checked'

  // Get saved color from cookie
  const savedColor = getCookie(cookieName)

  // If picker is checked, use custom color
  // Otherwise use default color or fallback
  const currentColor = isPrickerChecked
    ? savedColor || window.templateCustomizer._getSetting('Color') || '#FF4961'
    : window.templateCustomizer.settings.defaultPrimaryColor

  // Configure and initialize Pickr color picker
  const picker = new Pickr({
    el: elements.pickerEl,
    theme: 'nano',
    default: currentColor,
    defaultRepresentation: 'HEX',
    comparison: false,
    components: {
      hue: true,
      preview: true,
      interaction: {
        input: true
      }
    }
  })
  // Add color picker icon
  picker._root.button.classList.add('ti', 'tabler-color-picker')

  // Handle color changes
  picker.on('change', color => {
    const hexColor = color.toHEXA().toString()
    const rgbaColor = color.toRGBA().toString()

    // Update picker button color if exists
    elements.pcrButton?.style.setProperty('--pcr-color', rgbaColor)

    // Update selected option state
    elements.pickerWrapper.checked = true
    window.Helpers.updateCustomOptionCheck(elements.pickerWrapper)

    // Update theme color settings
    window.templateCustomizer._setSetting('Color', hexColor)
    window.templateCustomizer.setColor(hexColor, true)
  })
}

window.onload = () => {
  initializeColorPicker()

  // Get the saved color from the cookie or use default
  const layoutTemplate = document.documentElement.getAttribute('data-template') || ''
  const isAdmin = !layoutTemplate.includes('front')
  const cookieName = isAdmin ? 'admin-primaryColor' : 'front-primaryColor'

  // Get saved color from cookie
  function getCookie(name) {
    const cookies = document.cookie.split('; ')
    for (let i = 0; i < cookies.length; i++) {
      const [cookieName, cookieValue] = cookies[i].split('=')
      if (decodeURIComponent(cookieName) === name) {
        return decodeURIComponent(cookieValue)
      }
    }
    return null
  }

  const savedColor = getCookie(cookieName) || window.templateCustomizer.settings.defaultPrimaryColor
  const defaultPrimaryColor = TemplateCustomizer.COLORS[0].color

  // Set the color for the picker button
  const pcrButton = document.querySelector('.custom-option-content .pcr-button')
  if (pcrButton) {
    pcrButton.style.setProperty('--pcr-color', savedColor)
  }

  // Find and select the matching color option
  const colorOptions = document.querySelectorAll(
    '.template-customizer-color .template-customizer-colors-options input[type="radio"]'
  )
  let matchingOption = false

  // First check if color matches any predefined color
  colorOptions.forEach(option => {
    if (option.value === savedColor) {
      option.checked = true
      matchingOption = true
      if (typeof window.Helpers.updateCustomOptionCheck === 'function') {
        window.Helpers.updateCustomOptionCheck(option)
      }
    }
  })

  // If no matching option and the saved color isn't the default, select picker
  if (!matchingOption && colorOptions.length > 0 && savedColor !== defaultPrimaryColor) {
    const pickerOption = document.querySelector('.template-customizer-colors-options input[value="picker"]')
    if (pickerOption) {
      pickerOption.checked = true
      if (typeof window.Helpers.updateCustomOptionCheck === 'function') {
        window.Helpers.updateCustomOptionCheck(pickerOption)
      }
    }
  }
  // If no match and color is the default, select the first option
  else if (!matchingOption && savedColor === defaultPrimaryColor) {
    const firstOption = colorOptions[0]
    if (firstOption) {
      firstOption.checked = true
      if (typeof window.Helpers.updateCustomOptionCheck === 'function') {
        window.Helpers.updateCustomOptionCheck(firstOption)
      }
    }
  }
}
