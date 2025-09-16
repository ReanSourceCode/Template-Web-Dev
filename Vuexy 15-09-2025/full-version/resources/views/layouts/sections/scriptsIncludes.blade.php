@php
  use Illuminate\Support\Facades\Vite;

  $menuCollapsed = $configData['menuCollapsed'] === 'layout-menu-collapsed' ? json_encode(true) : false;

  // Get skin value directly from the config, keeping it as numeric if applicable
  $skin = $configData['skins'] ?? 0;

  // If we have a skin name from cookie or other source, use that instead
  $skinName = $configData['skinName'] ?? '';

  // Use either the skin name or numeric ID, prioritizing the name if available
  $defaultSkin = $skinName ?: $skin;

  // Define layout type and cookie naming
  $isAdminLayout = !str_contains($configData['layout'] ?? '', 'front');
  $primaryColorCookieName = $isAdminLayout ? 'admin-primaryColor' : 'front-primaryColor';

  // Get primary color - first from cookie, then from config
  $primaryColor = isset($_COOKIE[$primaryColorCookieName])
      ? $_COOKIE[$primaryColorCookieName]
      : $configData['color'] ?? null;
@endphp
<!-- laravel style -->
@vite(['resources/assets/vendor/js/helpers.js'])
<!-- beautify ignore:start -->
@if ($configData['hasCustomizer'])
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  @vite(['resources/assets/vendor/js/template-customizer.js'])
@endif

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  @vite(['resources/assets/js/config.js'])

@if ($configData['hasCustomizer'])
<script type="module">
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize template customizer after DOM is loaded
    if (window.TemplateCustomizer) {
      try {
        // Get the skin currently applied to the document
        const appliedSkin = document.documentElement.getAttribute('data-skin') || "{{ $defaultSkin }}";

        window.templateCustomizer = new TemplateCustomizer({
          defaultTextDir: "{{ $configData['textDirection'] }}",
          @if ($primaryColor)
            defaultPrimaryColor: "{{ $primaryColor }}",
          @endif
          defaultTheme: "{{ $configData['themeOpt'] }}",
          defaultSkin: appliedSkin,
          defaultSemiDark: {{ $configData['semiDark'] ? 'true' : 'false' }},
          defaultShowDropdownOnHover: "{{ $configData['showDropdownOnHover'] }}",
          displayCustomizer: "{{ $configData['displayCustomizer'] }}",
          lang: '{{ app()->getLocale() }}',
          'controls': <?php echo json_encode($configData['customizerControls']); ?>,
        });

        // Ensure color is applied on page load
        @if ($primaryColor)
          if (window.Helpers && typeof window.Helpers.setColor === 'function') {
            window.Helpers.setColor("{{ $primaryColor }}", true);
          }
        @endif
      } catch (error) {
        console.warn('Template customizer initialization error:', error);
      }
    }
  });
</script>
@endif
