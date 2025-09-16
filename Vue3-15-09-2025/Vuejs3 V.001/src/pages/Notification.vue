<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import Lucide from "@/components/Base/Lucide";
import Notification from "@/components/Base/Notification";
import { type NotificationElement } from "@/components/Base/Notification";
import { FormSwitch } from "@/components/Base/Form";
import Button from "@/components/Base/Button";
import fakerData from "@/utils/faker";
import { ref, provide } from "vue";

// Basic non sticky notification
const basicNonStickyNotification = ref<NotificationElement>();
const basicNonStickyNotificationToggle = () => {
  // Show notification
  basicNonStickyNotification.value?.showToast();
};

provide("bind[basicNonStickyNotification]", (el: NotificationElement) => {
  basicNonStickyNotification.value = el;
});

// Basic sticky notification
const basicStickyNotification = ref<NotificationElement>();
const basicStickyNotificationToggle = () => {
  // Show notification
  basicStickyNotification.value?.showToast();
};

provide("bind[basicStickyNotification]", (el: NotificationElement) => {
  basicStickyNotification.value = el;
});

// Success notification
const successNotification = ref<NotificationElement>();
const successNotificationToggle = () => {
  // Show notification
  successNotification.value?.showToast();
};

provide("bind[successNotification]", (el: NotificationElement) => {
  successNotification.value = el;
});

// Notification with actions
const notificationWithActions = ref<NotificationElement>();
const notificationWithActionsToggle = () => {
  // Show notification
  notificationWithActions.value?.showToast();
};

provide("bind[notificationWithActions]", (el: NotificationElement) => {
  notificationWithActions.value = el;
});

// Notification with avatar
const notificationWithAvatar = ref<NotificationElement>();
const notificationWithAvatarToggle = () => {
  // Show notification
  notificationWithAvatar.value?.showToast();
};

provide("bind[notificationWithAvatar]", (el: NotificationElement) => {
  notificationWithAvatar.value = el;
});

// Notification with split buttons
const notificationWithSplitButtons = ref<NotificationElement>();
const notificationWithSplitButtonsToggle = () => {
  // Show notification
  notificationWithSplitButtons.value?.showToast();
};

provide("bind[notificationWithSplitButtons]", (el: NotificationElement) => {
  notificationWithSplitButtons.value = el;
});

// Notification with buttons below
const notificationWithButtonsBelow = ref<NotificationElement>();
const notificationWithButtonsBelowToggle = () => {
  // Show notification
  notificationWithButtonsBelow.value?.showToast();
};

provide("bind[notificationWithButtonsBelow]", (el: NotificationElement) => {
  notificationWithButtonsBelow.value = el;
});
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Notification</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Basic Notification -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Notification</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-1">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-1"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Basic Non Sticky Notification Content -->
              <Notification
                refKey="basicNonStickyNotification"
                :options="{
                  duration: 3000,
                }"
                class="flex flex-col sm:flex-row"
              >
                <div class="font-medium">Yay! Updates Published!</div>
                <a
                  class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                  href=""
                >
                  Review Changes
                </a>
              </Notification>
              <!-- END: Basic Non Sticky Notification Content -->
              <!-- BEGIN: Basic Sticky Notification Content -->
              <Notification
                refKey="basicStickyNotification"
                class="flex flex-col sm:flex-row"
              >
                <div class="font-medium">Yay! Updates Published!</div>
                <a
                  class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                  href=""
                >
                  Review Changes
                </a>
              </Notification>
              <!-- END: Basic Sticky Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button
                variant="primary"
                class="mr-1"
                @click="basicNonStickyNotificationToggle"
              >
                Show Non Sticky Notification
              </Button>
              <Button
                variant="primary"
                class="mt-2 sm:mt-0"
                @click="basicStickyNotificationToggle"
              >
                Show Sticky Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Basic Non Sticky Notification Content -->
                <Notification
                  refKey="basicNonStickyNotification"
                  :options="{
                    duration: 3000,
                  }"
                  class="flex flex-col sm:flex-row"
                >
                  <div class="font-medium">Yay! Updates Published!</div>
                  <a
                    class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                    href=""
                  >
                    Review Changes
                  </a>
                </Notification>
                <!-- END: Basic Non Sticky Notification Content -->
                <!-- BEGIN: Basic Sticky Notification Content -->
                <Notification
                  refKey="basicStickyNotification"
                  class="flex flex-col sm:flex-row"
                >
                  <div class="font-medium">Yay! Updates Published!</div>
                  <a
                    class="mt-1 font-medium text-primary dark:text-slate-400 sm:mt-0 sm:ml-40"
                    href=""
                  >
                    Review Changes
                  </a>
                </Notification>
                <!-- END: Basic Sticky Notification Content -->
                <!-- BEGIN: Notification Toggle -->
                <Button
                  variant="primary"
                  class="mr-1"
                  @click="basicNonStickyNotificationToggle"
                >
                  Show Non Sticky Notification
                </Button>
                <Button
                  variant="primary"
                  class="mt-2 sm:mt-0"
                  @click="basicStickyNotificationToggle"
                >
                  Show Sticky Notification
                </Button>
                <!-- END: Notification Toggle -->
              </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Basic non sticky notification
                const basicNonStickyNotification = ref<NotificationElement>();
                const basicNonStickyNotificationToggle = () => {
                  // Show notification
                  basicNonStickyNotification.current?.showToast();
                };
              
                // Basic sticky notification
                const basicStickyNotification = ref<NotificationElement>();
                const basicStickyNotificationToggle = () => {
                  // Show notification
                  basicStickyNotification.current?.showToast();
                };
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Notification -->
      <!-- BEGIN: Success Notification -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Success Notification</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-2">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-2"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Notification Content -->
              <Notification refKey="successNotification" class="flex">
                <Lucide icon="CheckCircle" class="text-success" />
                <div class="ml-4 mr-4">
                  <div class="font-medium">Message Saved!</div>
                  <div class="mt-1 text-slate-500">
                    The message will be sent in 5 minutes.
                  </div>
                </div>
              </Notification>
              <!-- END: Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button variant="primary" @click="successNotificationToggle">
                Show Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
                <div class="text-center">
                  <!-- BEGIN: Notification Content -->
                  <Notification refKey="successNotification" class="flex">
                    <Lucide icon="CheckCircle" class="text-success" />
                    <div class="ml-4 mr-4">
                      <div class="font-medium">Message Saved!</div>
                      <div class="mt-1 text-slate-500">
                        The message will be sent in 5 minutes.
                      </div>
                    </div>
                  </Notification>
                  <!-- END: Notification Content -->
                  <!-- BEGIN: Notification Toggle -->
                  <Button variant="primary" @click="successNotificationToggle">
                    Show Notification
                  </Button>
                  <!-- END: Notification Toggle -->
                </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Success notification
                const successNotification = ref<NotificationElement>();
                const successNotificationToggle = () => {
                  // Show notification
                  successNotification.current?.showToast();
                };
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Success Notification -->
      <!-- BEGIN: Notification With Actions -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Notification With Actions
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-3">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-3"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Notification Content -->
              <Notification refKey="notificationWithActions" class="flex">
                <Lucide icon="HardDrive" />
                <div class="ml-4 mr-4">
                  <div class="font-medium">Storage Removed!</div>
                  <div class="mt-1 text-slate-500">
                    The server will restart in 30 seconds, don't make
                    <br />
                    changes during the update process!
                  </div>
                  <div class="font-medium flex mt-1.5">
                    <a class="text-primary dark:text-slate-400" href="">
                      Restart Now
                    </a>
                    <a class="ml-3 text-slate-500" href=""> Cancel </a>
                  </div>
                </div>
              </Notification>
              <!-- END: Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button variant="primary" @click="notificationWithActionsToggle">
                Show Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Notification Content -->
                <Notification refKey="notificationWithActions" class="flex">
                  <Lucide icon="HardDrive" />
                  <div class="ml-4 mr-4">
                    <div class="font-medium">Storage Removed!</div>
                    <div class="mt-1 text-slate-500">
                      The server will restart in 30 seconds, don't make
                      <br />
                      changes during the update process!
                    </div>
                    <div class="font-medium flex mt-1.5">
                      <a class="text-primary dark:text-slate-400" href="">
                        Restart Now
                      </a>
                      <a class="ml-3 text-slate-500" href=""> Cancel </a>
                    </div>
                  </div>
                </Notification>
                <!-- END: Notification Content -->
                <!-- BEGIN: Notification Toggle -->
                <Button
                  variant="primary"
                  @click="notificationWithActionsToggle"
                >
                  Show Notification
                </Button>
                <!-- END: Notification Toggle -->
              </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Notification with actions
                const notificationWithActions = ref<NotificationElement>();
                const notificationWithActionsToggle = () => {
                  // Show notification
                  notificationWithActions.current?.showToast();
                };  
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Notification With Actions -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Notification With Avatar -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Notification With Avatar
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-4">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-4"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Notification Content -->
              <Notification
                refKey="notificationWithAvatar"
                :options="{
                  close: false,
                }"
                class="flex"
              >
                <div
                  class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                >
                  <img
                    alt="Midone Tailwind HTML Admin Template"
                    :src="fakerData[0].photos[0]"
                  />
                </div>
                <div class="ml-4 sm:mr-28">
                  <div class="font-medium">
                    {{ fakerData[0].users[0].name }}
                  </div>
                  <div class="mt-1 text-slate-500">See you later! 😃😃😃</div>
                </div>
                <a
                  data-dismiss="notification"
                  class="absolute top-0 bottom-0 right-0 flex items-center px-6 font-medium border-l border-slate-200/60 dark:border-darkmode-400 text-primary dark:text-slate-400"
                  href="#"
                >
                  Reply
                </a>
              </Notification>
              <!-- END: Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button variant="primary" @click="notificationWithAvatarToggle">
                Show Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Notification Content -->
                <Notification
                  refKey="notificationWithAvatar"
                  :options="{
                    close: false,
                  }"
                  class="flex"
                >
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[0].photos[0]"
                    />
                  </div>
                  <div class="ml-4 sm:mr-28">
                    <div class="font-medium">
                      \{\{ fakerData[0].users[0].name \}\}
                    </div>
                    <div class="mt-1 text-slate-500">See you later! 😃😃😃</div>
                  </div>
                  <a
                    data-dismiss="notification"
                    class="absolute top-0 bottom-0 right-0 flex items-center px-6 font-medium border-l border-slate-200/60 dark:border-darkmode-400 text-primary dark:text-slate-400"
                    href="#"
                  >
                    Reply
                  </a>
                </Notification>
                <!-- END: Notification Content -->
                <!-- BEGIN: Notification Toggle -->
                <Button variant="primary" @click="notificationWithAvatarToggle">
                  Show Notification
                </Button>
                <!-- END: Notification Toggle -->
              </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Notification with avatar
                const notificationWithAvatar = ref<NotificationElement>();
                const notificationWithAvatarToggle = () => {
                  // Show notification
                  notificationWithAvatar.current?.showToast();
                };
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Notification With Avatar -->
      <!-- BEGIN: Notification With Split Buttons -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Notification With Split Buttons
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-5">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-5"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Notification Content -->
              <Notification
                refKey="notificationWithSplitButtons"
                :options="{
                  close: false,
                }"
                class="flex"
              >
                <div class="sm:mr-40">
                  <div class="font-medium">Introducing new theme</div>
                  <div class="mt-1 text-slate-500">Release version 2.3.3</div>
                </div>
                <div
                  class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400"
                >
                  <a
                    class="flex items-center justify-center flex-1 px-6 font-medium border-b text-primary dark:text-slate-400 border-slate-200/60 dark:border-darkmode-400"
                    href="#"
                  >
                    View Details
                  </a>
                  <a
                    data-dismiss="notification"
                    class="flex items-center justify-center flex-1 px-6 font-medium text-slate-500"
                    href="#"
                  >
                    Dismiss
                  </a>
                </div>
              </Notification>
              <!-- END: Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button
                variant="primary"
                @click="notificationWithSplitButtonsToggle"
              >
                Show Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Notification Content -->
                <Notification
                  refKey="notificationWithSplitButtons"
                  :options="{
                    close: false,
                  }"
                  class="flex"
                >
                  <div class="sm:mr-40">
                    <div class="font-medium">Introducing new theme</div>
                    <div class="mt-1 text-slate-500">Release version 2.3.3</div>
                  </div>
                  <div
                    class="absolute top-0 bottom-0 right-0 flex flex-col border-l border-slate-200/60 dark:border-darkmode-400"
                  >
                    <a
                      class="flex items-center justify-center flex-1 px-6 font-medium border-b text-primary dark:text-slate-400 border-slate-200/60 dark:border-darkmode-400"
                      href="#"
                    >
                      View Details
                    </a>
                    <a
                      data-dismiss="notification"
                      class="flex items-center justify-center flex-1 px-6 font-medium text-slate-500"
                      href="#"
                    >
                      Dismiss
                    </a>
                  </div>
                </Notification>
                <!-- END: Notification Content -->
                <!-- BEGIN: Notification Toggle -->
                <Button
                  variant="primary"
                  @click="notificationWithSplitButtonsToggle"
                >
                  Show Notification
                </Button>
                <!-- END: Notification Toggle -->
              </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Notification with split buttons
                const notificationWithSplitButtons = ref<NotificationElement>();
                const notificationWithSplitButtonsToggle = () => {
                  // Show notification
                  notificationWithSplitButtons.current?.showToast();
                };
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Notification With Split Buttons -->
      <!-- BEGIN: Notification With Buttons Below -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Notification With Buttons Below
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-6">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-6"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Notification Content -->
              <Notification
                refKey="notificationWithButtonsBelow"
                :options="{
                  close: false,
                }"
                class="flex"
              >
                <Lucide icon="FileText" />
                <div class="ml-4 mr-5 sm:mr-20">
                  <div class="font-medium">
                    {{ fakerData[0].users[0].name }}
                  </div>
                  <div class="mt-1 text-slate-500">Sent you new documents.</div>
                  <div class="mt-2.5">
                    <Button
                      variant="primary"
                      as="a"
                      class="px-2 py-1 mr-2"
                      href=""
                    >
                      Preview
                    </Button>
                    <Button
                      variant="outline-secondary"
                      as="a"
                      class="px-2 py-1"
                      href=""
                    >
                      Download
                    </Button>
                  </div>
                </div>
              </Notification>
              <!-- END: Notification Content -->
              <!-- BEGIN: Notification Toggle -->
              <Button
                variant="primary"
                @click="notificationWithButtonsBelowToggle"
              >
                Show Notification
              </Button>
              <!-- END: Notification Toggle -->
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Notification Content -->
                <Notification
                  refKey="notificationWithButtonsBelow"
                  :options="{
                    close: false,
                  }"
                  class="flex"
                >
                  <Lucide icon="FileText" />
                  <div class="ml-4 mr-5 sm:mr-20">
                    <div class="font-medium">
                      \{\{ fakerData[0].users[0].name \}\}
                    </div>
                    <div class="mt-1 text-slate-500">
                      Sent you new documents.
                    </div>
                    <div class="mt-2.5">
                      <Button
                        variant="primary"
                        as="a"
                        class="px-2 py-1 mr-2"
                        href=""
                      >
                        Preview
                      </Button>
                      <Button
                        variant="outline-secondary"
                        as="a"
                        class="px-2 py-1"
                        href=""
                      >
                        Download
                      </Button>
                    </div>
                  </div>
                </Notification>
                <!-- END: Notification Content -->
                <!-- BEGIN: Notification Toggle -->
                <Button
                  variant="primary"
                  @click="notificationWithButtonsBelowToggle"
                >
                  Show Notification
                </Button>
                <!-- END: Notification Toggle -->
              </div>
              `}}
            </Preview.Highlight>
            <Preview.Highlight type="javascript" class="mt-5">
              {{`
                // Notification with buttons below
                const notificationWithButtonsBelow = ref<NotificationElement>();
                const notificationWithButtonsBelowToggle = () => {
                  // Show notification
                  notificationWithButtonsBelow.current?.showToast();
                };
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Notification With Buttons Below -->
    </div>
  </div>
</template>
