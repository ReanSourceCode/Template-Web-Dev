<?php

// Custom Configuration Settings
// -------------------------------------------------------------------------------------
// IMPORTANT: Ensure that you clear your browser's local storage to properly view the configuration changes in the template.
// To clear local storage, follow this guide: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).

return [
  'custom' => [
    'myLayout' => 'vertical', // Layout type: 'vertical' (default), 'horizontal'
    // 'primaryColor' => '#FF4646', // Set the primary color
    'myTheme' => 'light', // Theme options: 'light' (default), 'dark', 'system'
    'mySkins' => 'default', // Skin options: 'default', 'bordered'
    'hasSemiDark' => false, // Semi-dark mode: true/false (false by default)
    'myRTLMode' => false, // Right-to-left (RTL) layout: true/false (false by default)
    'hasCustomizer' => true, // Enable/Disable customizer: true (default) or false
    'displayCustomizer' => true, // Display customizer UI: true (default) or false
    'contentLayout' => 'compact', // Layout size: 'compact' (container-xxl) or 'wide' (container-fluid)
    'navbarType' => 'sticky', // Navbar type: 'sticky', 'static', or 'hidden' (only for vertical layout)
    'footerFixed' => false, // Footer fixed position: true/false (false by default)
    'menuFixed' => true, // Menu fixed position: true (default) or false (only for vertical layout)
    'menuCollapsed' => false, // Menu collapsed state: true/false (false by default)
    'headerType' => 'fixed', // Header type: 'static' or 'fixed' (only for horizontal layout)
    'showDropdownOnHover' => true, // Dropdown on hover for horizontal layout: true/false
    'customizerControls' => [
      'color', // Enable/Disable color picker in customizer
      'theme', // Enable/Disable theme selection in customizer
      'skins', // Enable/Disable skin options in customizer
      'semiDark', // Enable/Disable semi-dark mode in customizer
      'layoutCollapsed', // Enable/Disable collapsed layout in customizer
      'layoutNavbarOptions', // Enable/Disable navbar options in customizer
      'headerType', // Enable/Disable header type selection in customizer
      'contentLayout', // Enable/Disable content layout options in customizer
      'rtl' // Enable/Disable RTL layout options in customizer
    ], // List of available customizer controls
  ],
];
