<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import {
  FormSwitch,
  FormLabel,
  FormInput,
  FormTextarea,
} from "@/components/Base/Form";
import Button from "@/components/Base/Button";
import Notification from "@/components/Base/Notification";
import Lucide from "@/components/Base/Lucide";
import {
  required,
  minLength,
  maxLength,
  email,
  url,
  integer,
} from "@vuelidate/validators";
import { useVuelidate } from "@vuelidate/core";
import Toastify from "toastify-js";
import { reactive, toRefs } from "vue";

const formData = reactive({
  name: "",
  email: "",
  password: "",
  age: "",
  url: "",
  comment: "",
});

const rules = {
  name: {
    required,
    minLength: minLength(2),
  },
  email: {
    required,
    email,
  },
  password: {
    required,
    minLength: minLength(6),
  },
  age: {
    required,
    integer,
    maxLength: maxLength(3),
  },
  url: {
    url,
  },
  comment: {
    required,
    minLength: minLength(10),
  },
};

const validate = useVuelidate(rules, toRefs(formData));

const onSubmit = () => {
  validate.value.$touch();
  if (validate.value.$invalid) {
    const failedEl = document
      .querySelectorAll("#failed-notification-content")[0]
      .cloneNode(true) as HTMLElement;
    failedEl.classList.remove("hidden");
    Toastify({
      node: failedEl,
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top",
      position: "right",
      stopOnFocus: true,
    }).showToast();
  } else {
    const successEl = document
      .querySelectorAll("#success-notification-content")[0]
      .cloneNode(true) as HTMLElement;
    successEl.classList.remove("hidden");
    Toastify({
      node: successEl,
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top",
      position: "right",
      stopOnFocus: true,
    }).showToast();
  }
};
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Form Validation</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Form Validation -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Implementation</h2>
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
            <!-- BEGIN: Validation Form -->
            <form class="validate-form" @submit.prevent="onSubmit">
              <div class="input-form">
                <FormLabel
                  htmlFor="validation-form-1"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Name
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Required, at least 2 characters
                  </span>
                </FormLabel>
                <FormInput
                  id="validation-form-1"
                  v-model.trim="validate.name.$model"
                  type="text"
                  name="name"
                  :class="{
                    'border-danger': validate.name.$error,
                  }"
                  placeholder="John Legend"
                />
                <template v-if="validate.name.$error">
                  <div
                    v-for="(error, index) in validate.name.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div class="mt-3 input-form">
                <FormLabel
                  htmlFor="validation-form-2"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Email
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Required, email address format
                  </span>
                </FormLabel>
                <FormInput
                  v-model.trim="validate.email.$model"
                  id="validation-form-2"
                  type="email"
                  name="email"
                  :class="{ 'border-danger': validate.email.$error }"
                  placeholder="example@gmail.com"
                />
                <template v-if="validate.email.$error">
                  <div
                    v-for="(error, index) in validate.email.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div class="mt-3 input-form">
                <FormLabel
                  htmlFor="validation-form-3"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Password
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Required, at least 6 characters
                  </span>
                </FormLabel>
                <FormInput
                  id="validation-form-3"
                  v-model.trim="validate.password.$model"
                  type="password"
                  name="password"
                  :class="{ 'border-danger': validate.password.$error }"
                  placeholder="secret"
                />
                <template v-if="validate.password.$error">
                  <div
                    v-for="(error, index) in validate.password.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div class="mt-3 input-form">
                <FormLabel
                  htmlFor="validation-form-4"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Age
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Required, integer only & maximum 3 characters
                  </span>
                </FormLabel>
                <FormInput
                  id="validation-form-4"
                  v-model="validate.age.$model"
                  type="number"
                  name="age"
                  :class="{ 'border-danger': validate.age.$error }"
                  placeholder="21"
                />
                <template v-if="validate.age.$error">
                  <div
                    v-for="(error, index) in validate.age.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div class="mt-3 input-form">
                <FormLabel
                  htmlFor="validation-form-5"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Profile URL
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Optional, URL format
                  </span>
                </FormLabel>
                <FormInput
                  id="validation-form-5"
                  v-model.trim="validate.url.$model"
                  type="text"
                  name="url"
                  :class="{ 'border-danger': validate.url.$error }"
                  placeholder="https://google.com"
                />
                <template v-if="validate.url.$error">
                  <div
                    v-for="(error, index) in validate.url.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div class="mt-3 input-form">
                <FormLabel
                  htmlFor="validation-form-6"
                  class="flex flex-col w-full sm:flex-row"
                >
                  Comment
                  <span class="mt-1 text-xs sm:ml-auto sm:mt-0 text-slate-500">
                    Required, at least 10 characters
                  </span>
                </FormLabel>
                <FormTextarea
                  id="validation-form-6"
                  v-model.trim="validate.comment.$model"
                  name="comment"
                  :class="{ 'border-danger': validate.comment.$error }"
                  placeholder="Type your comments"
                ></FormTextarea>
                <template v-if="validate.comment.$error">
                  <div
                    v-for="(error, index) in validate.comment.$errors"
                    :key="index"
                    class="mt-2 text-danger"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <Button variant="primary" type="submit" class="mt-5">
                Register
              </Button>
            </form>
            <!-- END: Validation Form -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight type="javascript">
              {{
                `
                const formData = reactive({
                    name: "",
                    email: "",
                    password: "",
                    age: "",
                    url: "",
                    comment: "",
                    });

                    const rules = {
                    name: {
                        required,
                        minLength: minLength(2),
                    },
                    email: {
                        required,
                        email,
                    },
                    password: {
                        required,
                        minLength: minLength(6),
                    },
                    age: {
                        required,
                        integer,
                        maxLength: maxLength(3),
                    },
                    url: {
                        url,
                    },
                    comment: {
                        required,
                        minLength: minLength(10),
                    },
                };

                const validate = useVuelidate(rules, toRefs(formData));

                const onSubmit = () => {
                    validate.value.$touch();
                    if (validate.value.$invalid) {
                        const failedEl = document
                        .querySelectorAll("#failed-notification-content")[0]
                        .cloneNode(true) as HTMLElement;
                        failedEl.classList.remove("hidden");
                        Toastify({
                        node: failedEl,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        }).showToast();
                    } else {
                        const successEl = document
                        .querySelectorAll("#success-notification-content")[0]
                        .cloneNode(true) as HTMLElement;
                        successEl.classList.remove("hidden");
                        Toastify({
                        node: successEl,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true,
                        }).showToast();
                    }
                };
                `
              }}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Form Validation -->
      <!-- BEGIN: Success Notification Content -->
      <Notification id="success-notification-content" class="flex hidden">
        <Lucide icon="CheckCircle" class="text-success" />
        <div class="ml-4 mr-4">
          <div class="font-medium">Registration success!</div>
          <div class="mt-1 text-slate-500">
            Please check your e-mail for further info!
          </div>
        </div>
      </Notification>
      <!-- END: Success Notification Content -->
      <!-- BEGIN: Failed Notification Content -->
      <Notification id="failed-notification-content" class="flex hidden">
        <Lucide icon="XCircle" class="text-danger" />
        <div class="ml-4 mr-4">
          <div class="font-medium">Registration failed!</div>
          <div class="mt-1 text-slate-500">Please check the fileld form.</div>
        </div>
      </Notification>
      <!-- END: Failed Notification Content -->
    </div>
  </div>
</template>
