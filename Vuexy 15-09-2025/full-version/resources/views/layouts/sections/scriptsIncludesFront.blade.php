@php
  use Illuminate\Support\Facades\Vite;

  // Get primary color - first from cookie, then from config
  $primaryColor = isset($_COOKIE['front-primaryColor']) ? $_COOKIE['front-primaryColor'] : $configData['color'] ?? null;
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
@vite(['resources/assets/js/front-config.js'])

@if ($configData['hasCustomizer'])
<script type="module">
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize template customizer after DOM is loaded
    if (window.TemplateCustomizer) {
      try {
        window.templateCustomizer = new TemplateCustomizer({
          defaultTextDir: "{{ $configData['textDirection'] }}",
          @if ($primaryColor)
            defaultPrimaryColor: "{{ $primaryColor }}",
          @endif
          defaultTheme: "{{ $configData['themeOpt'] }}",
          defaultShowDropdownOnHover: "{{ $configData['showDropdownOnHover'] }}",
          displayCustomizer: "{{ $configData['displayCustomizer'] }}",
          lang: '{{ app()->getLocale() }}',
          'controls': <?php echo json_encode(['color', 'theme', 'rtl']); ?>,
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
