/**
 * Config
 * -------------------------------------------------------------------------------------
 * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
 * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).
 */

'use strict';

window.assetsPath = document.documentElement.getAttribute('data-assets-path');
window.templateName = document.documentElement.getAttribute('data-template');

// JS global variables
window.config = {
  // global color variables for charts except chartjs
  colors: {
primary: window.Helpers.getCssVar('primary'),
    secondary: window.Helpers.getCssVar('secondary'),
    success: window.Helpers.getCssVar('success'),
    info: window.Helpers.getCssVar('info'),
    warning: window.Helpers.getCssVar('warning'),
    danger: window.Helpers.getCssVar('danger'),
    dark: window.Helpers.getCssVar('dark'),
    black: window.Helpers.getCssVar('pure-black'),
    white: window.Helpers.getCssVar('white'),
    cardColor: window.Helpers.getCssVar('paper-bg'),
    bodyBg: window.Helpers.getCssVar('body-bg'),
    bodyColor: window.Helpers.getCssVar('body-color'),
    headingColor: window.Helpers.getCssVar('heading-color'),
    textMuted: window.Helpers.getCssVar('secondary-color'),
    borderColor: window.Helpers.getCssVar('border-color')
  },
  colors_label: {
    primary: window.Helpers.getCssVar('primary-bg-subtle'),
    secondary: window.Helpers.getCssVar('secondary-bg-subtle'),
    success: window.Helpers.getCssVar('success-bg-subtle'),
    info: window.Helpers.getCssVar('info-bg-subtle'),
    warning: window.Helpers.getCssVar('warning-bg-subtle'),
    danger: window.Helpers.getCssVar('danger-bg-subtle'),
    dark: window.Helpers.getCssVar('dark-bg-subtle')
  }
};
