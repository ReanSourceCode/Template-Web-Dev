import { type Menu } from "@/stores/menu";

const menu: Array<Menu | "divider"> = [
  {
    icon: "Home",
    pageName: "dashboard",
    title: "Dashboard",
    subMenu: [
      {
        icon: "Activity",
        pageName: "dashboard-overview-1",
        title: "Overview 1",
      },
      {
        icon: "Activity",
        pageName: "dashboard-overview-2",
        title: "Overview 2",
      },
      {
        icon: "Activity",
        pageName: "dashboard-overview-3",
        title: "Overview 3",
      },
      {
        icon: "Activity",
        pageName: "dashboard-overview-4",
        title: "Overview 4",
      },
    ],
  },
  {
    icon: "ShoppingBag",
    pageName: "ecommerce",
    title: "E-Commerce",
    subMenu: [
      {
        icon: "Activity",
        pageName: "categories",
        title: "Categories",
      },
      {
        icon: "Activity",
        pageName: "add-product",
        title: "Add Product",
      },
      {
        icon: "Activity",
        pageName: "products",
        title: "Products",
        subMenu: [
          {
            icon: "Zap",
            pageName: "product-list",
            title: "Product List",
          },
          {
            icon: "Zap",
            pageName: "product-grid",
            title: "Product Grid",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "transactions",
        title: "Transactions",
        subMenu: [
          {
            icon: "Zap",
            pageName: "transaction-list",
            title: "Transaction List",
          },
          {
            icon: "Zap",
            pageName: "transaction-detail",
            title: "Transaction Detail",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "sellers",
        title: "Sellers",
        subMenu: [
          {
            icon: "Zap",
            pageName: "seller-list",
            title: "Seller List",
          },
          {
            icon: "Zap",
            pageName: "seller-detail",
            title: "Seller Detail",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "reviews",
        title: "Reviews",
      },
    ],
  },
  {
    icon: "Inbox",
    pageName: "inbox",
    title: "Inbox",
  },
  {
    icon: "HardDrive",
    pageName: "file-manager",
    title: "File Manager",
  },
  {
    icon: "CreditCard",
    pageName: "point-of-sale",
    title: "Point of Sale",
  },
  {
    icon: "MessageSquare",
    pageName: "chat",
    title: "Chat",
  },
  {
    icon: "FileText",
    pageName: "post",
    title: "Post",
  },
  {
    icon: "Calendar",
    pageName: "calendar",
    title: "Calendar",
  },
  "divider",
  {
    icon: "Edit",
    pageName: "crud",
    title: "Crud",
    subMenu: [
      {
        icon: "Activity",
        pageName: "crud-data-list",
        title: "Data List",
      },
      {
        icon: "Activity",
        pageName: "crud-form",
        title: "Form",
      },
    ],
  },
  {
    icon: "Users",
    pageName: "users",
    title: "Users",
    subMenu: [
      {
        icon: "Activity",
        pageName: "users-layout-1",
        title: "Layout 1",
      },
      {
        icon: "Activity",
        pageName: "users-layout-2",
        title: "Layout 2",
      },
      {
        icon: "Activity",
        pageName: "users-layout-3",
        title: "Layout 3",
      },
    ],
  },
  {
    icon: "Trello",
    pageName: "profile",
    title: "Profile",
    subMenu: [
      {
        icon: "Activity",
        pageName: "profile-overview-1",
        title: "Overview 1",
      },
      {
        icon: "Activity",
        pageName: "profile-overview-2",
        title: "Overview 2",
      },
      {
        icon: "Activity",
        pageName: "profile-overview-3",
        title: "Overview 3",
      },
    ],
  },
  {
    icon: "Layout",
    pageName: "layout",
    title: "Pages",
    subMenu: [
      {
        icon: "Activity",
        pageName: "wizards",
        title: "Wizards",
        subMenu: [
          {
            icon: "Zap",
            pageName: "wizard-layout-1",
            title: "Layout 1",
          },
          {
            icon: "Zap",
            pageName: "wizard-layout-2",
            title: "Layout 2",
          },
          {
            icon: "Zap",
            pageName: "wizard-layout-3",
            title: "Layout 3",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "blog",
        title: "Blog",
        subMenu: [
          {
            icon: "Zap",
            pageName: "blog-layout-1",
            title: "Layout 1",
          },
          {
            icon: "Zap",
            pageName: "blog-layout-2",
            title: "Layout 2",
          },
          {
            icon: "Zap",
            pageName: "blog-layout-3",
            title: "Layout 3",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "pricing",
        title: "Pricing",
        subMenu: [
          {
            icon: "Zap",
            pageName: "pricing-layout-1",
            title: "Layout 1",
          },
          {
            icon: "Zap",
            pageName: "pricing-layout-2",
            title: "Layout 2",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "invoice",
        title: "Invoice",
        subMenu: [
          {
            icon: "Zap",
            pageName: "invoice-layout-1",
            title: "Layout 1",
          },
          {
            icon: "Zap",
            pageName: "invoice-layout-2",
            title: "Layout 2",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "faq",
        title: "FAQ",
        subMenu: [
          {
            icon: "Zap",
            pageName: "faq-layout-1",
            title: "Layout 1",
          },
          {
            icon: "Zap",
            pageName: "faq-layout-2",
            title: "Layout 2",
          },
          {
            icon: "Zap",
            pageName: "faq-layout-3",
            title: "Layout 3",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "login",
        title: "Login",
      },
      {
        icon: "Activity",
        pageName: "register",
        title: "Register",
      },
      {
        icon: "Activity",
        pageName: "error-page",
        title: "Error Page",
      },
      {
        icon: "Activity",
        pageName: "update-profile",
        title: "Update profile",
      },
      {
        icon: "Activity",
        pageName: "change-password",
        title: "Change Password",
      },
    ],
  },
  "divider",
  {
    icon: "Inbox",
    pageName: "components",
    title: "Components",
    subMenu: [
      {
        icon: "Activity",
        pageName: "table",
        title: "Table",
        subMenu: [
          {
            icon: "Zap",
            pageName: "regular-table",
            title: "Regular Table",
          },
          {
            icon: "Zap",
            pageName: "tabulator",
            title: "Tabulator",
          },
        ],
      },
      {
        icon: "Activity",
        pageName: "overlay",
        title: "Overlay",
        subMenu: [
          {
            icon: "Zap",
            pageName: "modal",
            title: "Modal",
          },
          {
            icon: "Zap",
            pageName: "slide-over",
            title: "Slide Over",
          },
          {
            icon: "Zap",
            pageName: "notification",
            title: "Notification",
          },
        ],
      },
      {
        icon: "Zap",
        pageName: "tab",
        title: "Tab",
      },
      {
        icon: "Zap",
        pageName: "accordion",
        title: "Accordion",
      },
      {
        icon: "Zap",
        pageName: "button",
        title: "Button",
      },
      {
        icon: "Zap",
        pageName: "alert",
        title: "Alert",
      },
      {
        icon: "Zap",
        pageName: "progress-bar",
        title: "Progress Bar",
      },
      {
        icon: "Zap",
        pageName: "tooltip",
        title: "Tooltip",
      },
      {
        icon: "Zap",
        pageName: "dropdown",
        title: "Dropdown",
      },
      {
        icon: "Zap",
        pageName: "typography",
        title: "Typography",
      },
      {
        icon: "Zap",
        pageName: "icon",
        title: "Icon",
      },
      {
        icon: "Zap",
        pageName: "loading-icon",
        title: "Loading ",
      },
    ],
  },
  {
    icon: "Sidebar",
    pageName: "forms",
    title: "Forms",
    subMenu: [
      {
        icon: "Activity",
        pageName: "regular-form",
        title: "Regular Form",
      },
      {
        icon: "Activity",
        pageName: "datepicker",
        title: "Datepicker",
      },
      {
        icon: "Activity",
        pageName: "tom-select",
        title: "Tom Select",
      },
      {
        icon: "Activity",
        pageName: "file-upload",
        title: "File Upload",
      },
      {
        icon: "Activity",
        pageName: "wysiwyg-editor",
        title: "Wysiwyg Editor",
      },
      {
        icon: "Activity",
        pageName: "validation",
        title: "Validation",
      },
    ],
  },
  {
    icon: "HardDrive",
    pageName: "widgets",
    title: "Widgets",
    subMenu: [
      {
        icon: "Activity",
        pageName: "chart",
        title: "Chart",
      },
      {
        icon: "Activity",
        pageName: "slider",
        title: "Slider",
      },
      {
        icon: "Activity",
        pageName: "image-zoom",
        title: "Image Zoom",
      },
    ],
  },
];

export default menu;
