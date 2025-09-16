import Menu from "./Menu.vue";
import Button from "./Button.vue";
import Items from "./Items.vue";
import Item from "./Item.vue";
import Divider from "./Divider.vue";
import Header from "./Header.vue";
import Footer from "./Footer.vue";

const TabComponent = Object.assign(Menu, {
  Button,
  Items,
  Item,
  Divider,
  Header,
  Footer,
});

export default TabComponent;
