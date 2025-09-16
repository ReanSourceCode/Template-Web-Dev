import Popover from "./Popover.vue";
import Button from "./Button.vue";
import Panel from "./Panel.vue";

const DialogComponent = Object.assign(Popover, {
  Button,
  Panel,
});

export default DialogComponent;
