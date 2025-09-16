<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import {
  FormSelect,
  FormInput,
  FormLabel,
  FormHelp,
  FormCheck,
  FormSwitch,
  FormInline,
  InputGroup,
} from "@/components/Base/Form";
import Button from "@/components/Base/Button";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Regular Form</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Input -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Input</h2>
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
            <div>
              <FormLabel htmlFor="regular-form-1">Input Text</FormLabel>
              <FormInput
                id="regular-form-1"
                type="text"
                placeholder="Input text"
              />
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="regular-form-2">Rounded</FormLabel>
              <FormInput
                id="regular-form-2"
                type="text"
                rounded
                placeholder="Rounded"
              />
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="regular-form-3">With Help</FormLabel>
              <FormInput
                id="regular-form-3"
                type="text"
                placeholder="With help"
              />
              <FormHelp>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
              </FormHelp>
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="regular-form-4">Password</FormLabel>
              <FormInput
                id="regular-form-4"
                type="password"
                placeholder="Password"
              />
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="regular-form-5">Disabled</FormLabel>
              <FormInput
                id="regular-form-5"
                type="text"
                placeholder="Disabled"
                disabled
              />
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <FormLabel htmlFor="regular-form-1">Input Text</FormLabel>
                <FormInput
                  id="regular-form-1"
                  type="text"
                  placeholder="Input text"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="regular-form-2">Rounded</FormLabel>
                <FormInput
                  id="regular-form-2"
                  type="text"
                  rounded
                  placeholder="Rounded"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="regular-form-3">With Help</FormLabel>
                <FormInput
                  id="regular-form-3"
                  type="text"
                  placeholder="With help"
                />
                <FormHelp>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry.
                </FormHelp>
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="regular-form-4">Password</FormLabel>
                <FormInput
                  id="regular-form-4"
                  type="password"
                  placeholder="Password"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="regular-form-5">Disabled</FormLabel>
                <FormInput
                  id="regular-form-5"
                  type="text"
                  placeholder="Disabled"
                  disabled
                />
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Input -->
      <!-- BEGIN: Input Sizing -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Input Sizing</h2>
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
            <FormInput
              type="text"
              formInputSize="lg"
              placeholder=".form-control-lg"
              aria-label=".form-control-lg example"
            />
            <FormInput
              type="text"
              class="mt-2"
              placeholder="Default input"
              aria-label="default input example"
            />
            <FormInput
              type="text"
              formInputSize="sm"
              class="mt-2"
              placeholder=".form-control-sm"
              aria-label=".form-control-sm example"
            />
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <FormInput
                type="text"
                formInputSize="lg"
                placeholder=".form-control-lg"
                aria-label=".form-control-lg example"
              />
              <FormInput
                type="text"
                class="mt-2"
                placeholder="Default input"
                aria-label="default input example"
              />
              <FormInput
                type="text"
                formInputSize="sm"
                class="mt-2"
                placeholder=".form-control-sm"
                aria-label=".form-control-sm example"
              />
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Input Sizing -->
      <!-- BEGIN: Input Groups -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Input Groups</h2>
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
            <InputGroup>
              <InputGroup.Text id="input-group-email"> @ </InputGroup.Text>
              <FormInput
                type="text"
                placeholder="Email"
                aria-label="Email"
                aria-describedby="input-group-email"
              />
            </InputGroup>
            <InputGroup class="mt-2">
              <FormInput
                type="text"
                placeholder="Price"
                aria-label="Price"
                aria-describedby="input-group-price"
              />
              <InputGroup.Text id="input-group-price"> .00 </InputGroup.Text>
            </InputGroup>
            <InputGroup class="mt-2">
              <InputGroup.Text>@</InputGroup.Text>
              <FormInput
                type="text"
                placeholder="Price"
                aria-label="Amount (to the nearest dollar)"
              />
              <InputGroup.Text>.00</InputGroup.Text>
            </InputGroup>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <InputGroup>
                <InputGroup.Text id="input-group-email"> @ </InputGroup.Text>
                <FormInput
                  type="text"
                  placeholder="Email"
                  aria-label="Email"
                  aria-describedby="input-group-email"
                />
              </InputGroup>
              <InputGroup class="mt-2">
                <FormInput
                  type="text"
                  placeholder="Price"
                  aria-label="Price"
                  aria-describedby="input-group-price"
                />
                <InputGroup.Text id="input-group-price"> .00 </InputGroup.Text>
              </InputGroup>
              <InputGroup class="mt-2">
                <InputGroup.Text>@</InputGroup.Text>
                <FormInput
                  type="text"
                  placeholder="Price"
                  aria-label="Amount (to the nearest dollar)"
                />
                <InputGroup.Text>.00</InputGroup.Text>
              </InputGroup>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Input Groups -->
      <!-- BEGIN: Input State -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Input State</h2>
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
            <div>
              <FormLabel htmlFor="input-state-1"> Input Success </FormLabel>
              <FormInput
                id="input-state-1"
                type="text"
                class="border-success"
                placeholder="Input text"
              />
              <div class="grid w-full h-1 grid-cols-12 gap-4 mt-3">
                <div class="h-full col-span-3 rounded bg-success"></div>
                <div class="h-full col-span-3 rounded bg-success"></div>
                <div class="h-full col-span-3 rounded bg-success"></div>
                <div
                  class="h-full col-span-3 rounded bg-slate-100 dark:bg-darkmode-800"
                ></div>
              </div>
              <div class="mt-2 text-success">Strong password</div>
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="input-state-2"> Input Warning </FormLabel>
              <FormInput
                id="input-state-2"
                type="text"
                class="border-warning"
                placeholder="Input text"
              />
              <div class="mt-2 text-warning">
                Attempting to reconnect to server...
              </div>
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="input-state-3">Input Error</FormLabel>
              <FormInput
                id="input-state-3"
                type="text"
                class="border-danger"
                placeholder="Input text"
              />
              <div class="mt-2 text-danger">This field is required</div>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <FormLabel htmlFor="input-state-1"> Input Success </FormLabel>
                <FormInput
                  id="input-state-1"
                  type="text"
                  class="border-success"
                  placeholder="Input text"
                />
                <div class="grid w-full h-1 grid-cols-12 gap-4 mt-3">
                  <div class="h-full col-span-3 rounded bg-success"></div>
                  <div class="h-full col-span-3 rounded bg-success"></div>
                  <div class="h-full col-span-3 rounded bg-success"></div>
                  <div
                    class="h-full col-span-3 rounded bg-slate-100 dark:bg-darkmode-800"
                  ></div>
                </div>
                <div class="mt-2 text-success">Strong password</div>
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="input-state-2"> Input Warning </FormLabel>
                <FormInput
                  id="input-state-2"
                  type="text"
                  class="border-warning"
                  placeholder="Input text"
                />
                <div class="mt-2 text-warning">
                  Attempting to reconnect to server...
                </div>
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="input-state-3">Input Error</FormLabel>
                <FormInput
                  id="input-state-3"
                  type="text"
                  class="border-danger"
                  placeholder="Input text"
                />
                <div class="mt-2 text-danger">This field is required</div>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Input State -->
      <!-- BEGIN: Select Options -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Select Options</h2>
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
            <div class="flex flex-col items-center sm:flex-row">
              <FormSelect
                formSelectSize="lg"
                class="sm:mt-2 sm:mr-2"
                aria-label=".form-select-lg example"
              >
                <option>Chris Evans</option>
                <option>Liam Neeson</option>
                <option>Daniel Craig</option>
              </FormSelect>
              <FormSelect
                class="mt-2 sm:mr-2"
                aria-label="Default select example"
              >
                <option>Chris Evans</option>
                <option>Liam Neeson</option>
                <option>Daniel Craig</option>
              </FormSelect>
              <FormSelect
                formSelectSize="sm"
                class="mt-2"
                aria-label=".form-select-sm example"
              >
                <option>Chris Evans</option>
                <option>Liam Neeson</option>
                <option>Daniel Craig</option>
              </FormSelect>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="flex flex-col items-center sm:flex-row">
                <FormSelect
                  formSelectSize="lg"
                  class="sm:mt-2 sm:mr-2"
                  aria-label=".form-select-lg example"
                >
                  <option>Chris Evans</option>
                  <option>Liam Neeson</option>
                  <option>Daniel Craig</option>
                </FormSelect>
                <FormSelect
                  class="mt-2 sm:mr-2"
                  aria-label="Default select example"
                >
                  <option>Chris Evans</option>
                  <option>Liam Neeson</option>
                  <option>Daniel Craig</option>
                </FormSelect>
                <FormSelect
                  formSelectSize="sm"
                  class="mt-2"
                  aria-label=".form-select-sm example"
                >
                  <option>Chris Evans</option>
                  <option>Liam Neeson</option>
                  <option>Daniel Craig</option>
                </FormSelect>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Select Options -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Vertical Form -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Vertical Form</h2>
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
            <div>
              <FormLabel htmlFor="vertical-form-1">Email</FormLabel>
              <FormInput
                id="vertical-form-1"
                type="text"
                placeholder="example@gmail.com"
              />
            </div>
            <div class="mt-3">
              <FormLabel htmlFor="vertical-form-2">Password</FormLabel>
              <FormInput
                id="vertical-form-2"
                type="text"
                placeholder="secret"
              />
            </div>
            <FormCheck class="mt-5">
              <FormCheck.Input id="vertical-form-3" type="checkbox" value="" />
              <FormCheck.Label htmlFor="vertical-form-3">
                Remember me
              </FormCheck.Label>
            </FormCheck>
            <Button variant="primary" class="mt-5"> Login </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <FormLabel htmlFor="vertical-form-1">Email</FormLabel>
                <FormInput
                  id="vertical-form-1"
                  type="text"
                  placeholder="example@gmail.com"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="vertical-form-2">Password</FormLabel>
                <FormInput
                  id="vertical-form-2"
                  type="text"
                  placeholder="secret"
                />
              </div>
              <FormCheck class="mt-5">
                <FormCheck.Input
                  id="vertical-form-3"
                  type="checkbox"
                  value=""
                />
                <FormCheck.Label htmlFor="vertical-form-3">
                  Remember me
                </FormCheck.Label>
              </FormCheck>
              <Button variant="primary" class="mt-5"> Login </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Vertical Form -->
      <!-- BEGIN: Horizontal Form -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Horizontal Form</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-7">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-7"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <FormInline>
              <FormLabel htmlFor="horizontal-form-1" class="sm:w-20">
                Email
              </FormLabel>
              <FormInput
                id="horizontal-form-1"
                type="text"
                placeholder="example@gmail.com"
              />
            </FormInline>
            <FormInline class="mt-5">
              <FormLabel htmlFor="horizontal-form-2" class="sm:w-20">
                Password
              </FormLabel>
              <FormInput
                id="horizontal-form-2"
                type="password"
                placeholder="secret"
              />
            </FormInline>
            <FormCheck class="mt-5 sm:ml-20 sm:pl-5">
              <FormCheck.Input
                id="horizontal-form-3"
                type="checkbox"
                value=""
              />
              <FormCheck.Label htmlFor="horizontal-form-3">
                Remember me
              </FormCheck.Label>
            </FormCheck>
            <div class="mt-5 sm:ml-20 sm:pl-5">
              <Button variant="primary">Login</Button>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <FormInline>
                <FormLabel htmlFor="horizontal-form-1" class="sm:w-20">
                  Email
                </FormLabel>
                <FormInput
                  id="horizontal-form-1"
                  type="text"
                  placeholder="example@gmail.com"
                />
              </FormInline>
              <FormInline class="mt-5">
                <FormLabel htmlFor="horizontal-form-2" class="sm:w-20">
                  Password
                </FormLabel>
                <FormInput
                  id="horizontal-form-2"
                  type="password"
                  placeholder="secret"
                />
              </FormInline>
              <FormCheck class="mt-5 sm:ml-20 sm:pl-5">
                <FormCheck.Input
                  id="horizontal-form-3"
                  type="checkbox"
                  value=""
                />
                <FormCheck.Label htmlFor="horizontal-form-3">
                  Remember me
                </FormCheck.Label>
              </FormCheck>
              <div class="mt-5 sm:ml-20 sm:pl-5">
                <Button variant="primary">Login</Button>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Horizontal Form -->
      <!-- BEGIN: Inline Form -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Inline Form</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-8">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-8"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="grid grid-cols-12 gap-2">
              <FormInput
                type="text"
                class="col-span-4"
                placeholder="Input inline 1"
                aria-label="default input inline 1"
              />
              <FormInput
                type="text"
                class="col-span-4"
                placeholder="Input inline 2"
                aria-label="default input inline 2"
              />
              <FormInput
                type="text"
                class="col-span-4"
                placeholder="Input inline 3"
                aria-label="default input inline 3"
              />
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="grid grid-cols-12 gap-2">
                <FormInput
                  type="text"
                  class="col-span-4"
                  placeholder="Input inline 1"
                  aria-label="default input inline 1"
                />
                <FormInput
                  type="text"
                  class="col-span-4"
                  placeholder="Input inline 2"
                  aria-label="default input inline 2"
                />
                <FormInput
                  type="text"
                  class="col-span-4"
                  placeholder="Input inline 3"
                  aria-label="default input inline 3"
                />
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Inline Form -->
      <!-- BEGIN: Checkbox & Switch -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Checkbox & Switch</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-9">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-9"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div>
              <label>Vertical Checkbox</label>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="checkbox-switch-1"
                  type="checkbox"
                  value=""
                />
                <FormCheck.Label htmlFor="checkbox-switch-1">
                  Chris Evans
                </FormCheck.Label>
              </FormCheck>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="checkbox-switch-2"
                  type="checkbox"
                  value=""
                />
                <FormCheck.Label htmlFor="checkbox-switch-2">
                  Liam Neeson
                </FormCheck.Label>
              </FormCheck>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="checkbox-switch-3"
                  type="checkbox"
                  value=""
                />
                <FormCheck.Label htmlFor="checkbox-switch-3">
                  Daniel Craig
                </FormCheck.Label>
              </FormCheck>
            </div>
            <div class="mt-3">
              <label>Horizontal Checkbox</label>
              <div class="flex flex-col mt-2 sm:flex-row">
                <FormCheck class="mr-2">
                  <FormCheck.Input
                    id="checkbox-switch-4"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-4">
                    Chris Evans
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2 mr-2 sm:mt-0">
                  <FormCheck.Input
                    id="checkbox-switch-5"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-5">
                    Liam Neeson
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2 mr-2 sm:mt-0">
                  <FormCheck.Input
                    id="checkbox-switch-6"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-6">
                    Daniel Craig
                  </FormCheck.Label>
                </FormCheck>
              </div>
            </div>
            <div class="mt-3">
              <label>Switch</label>
              <div class="mt-2">
                <FormSwitch>
                  <FormSwitch.Input id="checkbox-switch-7" type="checkbox" />
                  <FormSwitch.Label htmlFor="checkbox-switch-7">
                    Default switch checkbox input
                  </FormSwitch.Label>
                </FormSwitch>
              </div>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <label>Vertical Checkbox</label>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="checkbox-switch-1"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-1">
                    Chris Evans
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="checkbox-switch-2"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-2">
                    Liam Neeson
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="checkbox-switch-3"
                    type="checkbox"
                    value=""
                  />
                  <FormCheck.Label htmlFor="checkbox-switch-3">
                    Daniel Craig
                  </FormCheck.Label>
                </FormCheck>
              </div>
              <div class="mt-3">
                <label>Horizontal Checkbox</label>
                <div class="flex flex-col mt-2 sm:flex-row">
                  <FormCheck class="mr-2">
                    <FormCheck.Input
                      id="checkbox-switch-4"
                      type="checkbox"
                      value=""
                    />
                    <FormCheck.Label htmlFor="checkbox-switch-4">
                      Chris Evans
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-2 sm:mt-0">
                    <FormCheck.Input
                      id="checkbox-switch-5"
                      type="checkbox"
                      value=""
                    />
                    <FormCheck.Label htmlFor="checkbox-switch-5">
                      Liam Neeson
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-2 sm:mt-0">
                    <FormCheck.Input
                      id="checkbox-switch-6"
                      type="checkbox"
                      value=""
                    />
                    <FormCheck.Label htmlFor="checkbox-switch-6">
                      Daniel Craig
                    </FormCheck.Label>
                  </FormCheck>
                </div>
              </div>
              <div class="mt-3">
                <label>Switch</label>
                <div class="mt-2">
                  <FormSwitch>
                    <FormSwitch.Input id="checkbox-switch-7" type="checkbox" />
                    <FormSwitch.Label htmlFor="checkbox-switch-7">
                      Default switch checkbox input
                    </FormSwitch.Label>
                  </FormSwitch>
                </div>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Checkbox & Switch -->
      <!-- BEGIN: Radio Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Radio</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-10">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-10"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div>
              <label>Vertical Radio Button</label>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="radio-switch-1"
                  type="radio"
                  name="vertical_radio_button"
                  value="vertical-radio-chris-evans"
                />
                <FormCheck.Label htmlFor="radio-switch-1">
                  Chris Evans
                </FormCheck.Label>
              </FormCheck>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="radio-switch-2"
                  type="radio"
                  name="vertical_radio_button"
                  value="vertical-radio-liam-neeson"
                />
                <FormCheck.Label htmlFor="radio-switch-2">
                  Liam Neeson
                </FormCheck.Label>
              </FormCheck>
              <FormCheck class="mt-2">
                <FormCheck.Input
                  id="radio-switch-3"
                  type="radio"
                  name="vertical_radio_button"
                  value="vertical-radio-daniel-craig"
                />
                <FormCheck.Label htmlFor="radio-switch-3">
                  Daniel Craig
                </FormCheck.Label>
              </FormCheck>
            </div>
            <div class="mt-3">
              <label>Horizontal Radio Button</label>
              <div class="flex flex-col mt-2 sm:flex-row">
                <FormCheck class="mr-2">
                  <FormCheck.Input
                    id="radio-switch-4"
                    type="radio"
                    name="horizontal_radio_button"
                    value="horizontal-radio-chris-evans"
                  />
                  <FormCheck.Label htmlFor="radio-switch-4">
                    Chris Evans
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2 mr-2 sm:mt-0">
                  <FormCheck.Input
                    id="radio-switch-5"
                    type="radio"
                    name="horizontal_radio_button"
                    value="horizontal-radio-liam-neeson"
                  />
                  <FormCheck.Label htmlFor="radio-switch-5">
                    Liam Neeson
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2 mr-2 sm:mt-0">
                  <FormCheck.Input
                    id="radio-switch-6"
                    type="radio"
                    name="horizontal_radio_button"
                    value="horizontal-radio-daniel-craig"
                  />
                  <FormCheck.Label htmlFor="radio-switch-6">
                    Daniel Craig
                  </FormCheck.Label>
                </FormCheck>
              </div>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <label>Vertical Radio Button</label>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="radio-switch-1"
                    type="radio"
                    name="vertical_radio_button"
                    value="vertical-radio-chris-evans"
                  />
                  <FormCheck.Label htmlFor="radio-switch-1">
                    Chris Evans
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="radio-switch-2"
                    type="radio"
                    name="vertical_radio_button"
                    value="vertical-radio-liam-neeson"
                  />
                  <FormCheck.Label htmlFor="radio-switch-2">
                    Liam Neeson
                  </FormCheck.Label>
                </FormCheck>
                <FormCheck class="mt-2">
                  <FormCheck.Input
                    id="radio-switch-3"
                    type="radio"
                    name="vertical_radio_button"
                    value="vertical-radio-daniel-craig"
                  />
                  <FormCheck.Label htmlFor="radio-switch-3">
                    Daniel Craig
                  </FormCheck.Label>
                </FormCheck>
              </div>
              <div class="mt-3">
                <label>Horizontal Radio Button</label>
                <div class="flex flex-col mt-2 sm:flex-row">
                  <FormCheck class="mr-2">
                    <FormCheck.Input
                      id="radio-switch-4"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-chris-evans"
                    />
                    <FormCheck.Label htmlFor="radio-switch-4">
                      Chris Evans
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-2 sm:mt-0">
                    <FormCheck.Input
                      id="radio-switch-5"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-liam-neeson"
                    />
                    <FormCheck.Label htmlFor="radio-switch-5">
                      Liam Neeson
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-2 sm:mt-0">
                    <FormCheck.Input
                      id="radio-switch-6"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-daniel-craig"
                    />
                    <FormCheck.Label htmlFor="radio-switch-6">
                      Daniel Craig
                    </FormCheck.Label>
                  </FormCheck>
                </div>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Radio Button -->
    </div>
  </div>
</template>
