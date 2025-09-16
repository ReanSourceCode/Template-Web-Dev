import { createRouter, createWebHistory } from "vue-router";
import Layout from "@/themes";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      component: Layout,
      children: [
        {
          path: "/",
          name: "dashboard-overview-1",
          component: () => import("../pages/DashboardOverview1.vue"),
        },
        {
          path: "dashboard-overview-2",
          name: "dashboard-overview-2",
          component: () => import("../pages/DashboardOverview2.vue"),
        },
        {
          path: "dashboard-overview-3",
          name: "dashboard-overview-3",
          component: () => import("../pages/DashboardOverview3.vue"),
        },
        {
          path: "dashboard-overview-4",
          name: "dashboard-overview-4",
          component: () => import("../pages/DashboardOverview4.vue"),
        },
        {
          path: "categories",
          name: "categories",
          component: () => import("../pages/Categories.vue"),
        },
        {
          path: "add-product",
          name: "add-product",
          component: () => import("../pages/AddProduct.vue"),
        },
        {
          path: "product-list",
          name: "product-list",
          component: () => import("../pages/ProductList.vue"),
        },
        {
          path: "product-grid",
          name: "product-grid",
          component: () => import("../pages/ProductGrid.vue"),
        },
        {
          path: "transaction-list",
          name: "transaction-list",
          component: () => import("../pages/TransactionList.vue"),
        },
        {
          path: "transaction-detail",
          name: "transaction-detail",
          component: () => import("../pages/TransactionDetail.vue"),
        },
        {
          path: "seller-list",
          name: "seller-list",
          component: () => import("../pages/SellerList.vue"),
        },
        {
          path: "seller-detail",
          name: "seller-detail",
          component: () => import("../pages/SellerDetail.vue"),
        },
        {
          path: "reviews",
          name: "reviews",
          component: () => import("../pages/Reviews.vue"),
        },
        {
          path: "inbox",
          name: "inbox",
          component: () => import("../pages/Inbox.vue"),
        },
        {
          path: "file-manager",
          name: "file-manager",
          component: () => import("../pages/FileManager.vue"),
        },
        {
          path: "point-of-sale",
          name: "point-of-sale",
          component: () => import("../pages/PointOfSale.vue"),
        },
        {
          path: "chat",
          name: "chat",
          component: () => import("../pages/Chat.vue"),
        },
        {
          path: "post",
          name: "post",
          component: () => import("../pages/Post.vue"),
        },
        {
          path: "calendar",
          name: "calendar",
          component: () => import("../pages/Calendar.vue"),
        },
        {
          path: "crud-data-list",
          name: "crud-data-list",
          component: () => import("../pages/CrudDataList.vue"),
        },
        {
          path: "crud-form",
          name: "crud-form",
          component: () => import("../pages/CrudForm.vue"),
        },
        {
          path: "users-layout-1",
          name: "users-layout-1",
          component: () => import("../pages/UsersLayout1.vue"),
        },
        {
          path: "users-layout-2",
          name: "users-layout-2",
          component: () => import("../pages/UsersLayout2.vue"),
        },
        {
          path: "users-layout-3",
          name: "users-layout-3",
          component: () => import("../pages/UsersLayout3.vue"),
        },
        {
          path: "profile-overview-1",
          name: "profile-overview-1",
          component: () => import("../pages/ProfileOverview1.vue"),
        },
        {
          path: "profile-overview-2",
          name: "profile-overview-2",
          component: () => import("../pages/ProfileOverview2.vue"),
        },
        {
          path: "profile-overview-3",
          name: "profile-overview-3",
          component: () => import("../pages/ProfileOverview3.vue"),
        },
        {
          path: "wizard-layout-1",
          name: "wizard-layout-1",
          component: () => import("../pages/WizardLayout1.vue"),
        },
        {
          path: "wizard-layout-2",
          name: "wizard-layout-2",
          component: () => import("../pages/WizardLayout2.vue"),
        },
        {
          path: "wizard-layout-3",
          name: "wizard-layout-3",
          component: () => import("../pages/WizardLayout3.vue"),
        },
        {
          path: "blog-layout-1",
          name: "blog-layout-1",
          component: () => import("../pages/BlogLayout1.vue"),
        },
        {
          path: "blog-layout-2",
          name: "blog-layout-2",
          component: () => import("../pages/BlogLayout2.vue"),
        },
        {
          path: "blog-layout-3",
          name: "blog-layout-3",
          component: () => import("../pages/BlogLayout3.vue"),
        },
        {
          path: "pricing-layout-1",
          name: "pricing-layout-1",
          component: () => import("../pages/PricingLayout1.vue"),
        },
        {
          path: "pricing-layout-2",
          name: "pricing-layout-2",
          component: () => import("../pages/PricingLayout2.vue"),
        },
        {
          path: "invoice-layout-1",
          name: "invoice-layout-1",
          component: () => import("../pages/InvoiceLayout1.vue"),
        },
        {
          path: "invoice-layout-2",
          name: "invoice-layout-2",
          component: () => import("../pages/InvoiceLayout2.vue"),
        },
        {
          path: "faq-layout-1",
          name: "faq-layout-1",
          component: () => import("../pages/FaqLayout1.vue"),
        },
        {
          path: "faq-layout-2",
          name: "faq-layout-2",
          component: () => import("../pages/FaqLayout2.vue"),
        },
        {
          path: "faq-layout-3",
          name: "faq-layout-3",
          component: () => import("../pages/FaqLayout3.vue"),
        },
        {
          path: "update-profile",
          name: "update-profile",
          component: () => import("../pages/UpdateProfile.vue"),
        },
        {
          path: "change-password",
          name: "change-password",
          component: () => import("../pages/ChangePassword.vue"),
        },
        {
          path: "regular-table",
          name: "regular-table",
          component: () => import("../pages/RegularTable.vue"),
        },
        {
          path: "tabulator",
          name: "tabulator",
          component: () => import("../pages/Tabulator.vue"),
        },
        {
          path: "modal",
          name: "modal",
          component: () => import("../pages/Modal.vue"),
        },
        {
          path: "slide-over",
          name: "slide-over",
          component: () => import("../pages/Slideover.vue"),
        },
        {
          path: "notification",
          name: "notification",
          component: () => import("../pages/Notification.vue"),
        },
        {
          path: "tab",
          name: "tab",
          component: () => import("../pages/Tab.vue"),
        },
        {
          path: "accordion",
          name: "accordion",
          component: () => import("../pages/Accordion.vue"),
        },
        {
          path: "button",
          name: "button",
          component: () => import("../pages/Button.vue"),
        },
        {
          path: "alert",
          name: "alert",
          component: () => import("../pages/Alert.vue"),
        },
        {
          path: "progress-bar",
          name: "progress-bar",
          component: () => import("../pages/ProgressBar.vue"),
        },
        {
          path: "tooltip",
          name: "tooltip",
          component: () => import("../pages/Tooltip.vue"),
        },
        {
          path: "dropdown",
          name: "dropdown",
          component: () => import("../pages/Dropdown.vue"),
        },
        {
          path: "typography",
          name: "typography",
          component: () => import("../pages/Typography.vue"),
        },
        {
          path: "icon",
          name: "icon",
          component: () => import("../pages/Icon.vue"),
        },
        {
          path: "loading-icon",
          name: "loading-icon",
          component: () => import("../pages/LoadingIcon.vue"),
        },
        {
          path: "regular-form",
          name: "regular-form",
          component: () => import("../pages/RegularForm.vue"),
        },
        {
          path: "datepicker",
          name: "datepicker",
          component: () => import("../pages/Datepicker.vue"),
        },
        {
          path: "tom-select",
          name: "tom-select",
          component: () => import("../pages/TomSelect.vue"),
        },
        {
          path: "file-upload",
          name: "file-upload",
          component: () => import("../pages/FileUpload.vue"),
        },
        {
          path: "wysiwyg-editor",
          name: "wysiwyg-editor",
          component: () => import("../pages/WysiwgEditor.vue"),
        },
        {
          path: "validation",
          name: "validation",
          component: () => import("../pages/Validation.vue"),
        },
        {
          path: "chart",
          name: "chart",
          component: () => import("../pages/Chart.vue"),
        },
        {
          path: "slider",
          name: "slider",
          component: () => import("../pages/Slider.vue"),
        },
        {
          path: "image-zoom",
          name: "image-zoom",
          component: () => import("../pages/ImageZoom.vue"),
        },
      ],
    },
    {
      path: "/login",
      name: "login",
      component: () => import("../pages/Login.vue"),
    },
    {
      path: "/register",
      name: "register",
      component: () => import("../pages/Register.vue"),
    },
    {
      path: "/error-page",
      name: "error-page",
      component: () => import("../pages/ErrorPage.vue"),
    },
  ],
});

export default router;
