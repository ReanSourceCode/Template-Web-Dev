import Dropzone, { type DropzoneOptions } from "dropzone";
import { type DropzoneElement } from "./Dropzone.vue";

const init = (
  el: DropzoneElement,
  props: {
    options: DropzoneOptions;
    refKey?: string;
  }
) => {
  Dropzone.autoDiscover = false;
  if (!el.dropzone) {
    el.dropzone = new Dropzone(el, props.options);
  }
};

export { init };
