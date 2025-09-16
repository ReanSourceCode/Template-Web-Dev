<script setup lang="ts">
import Lucide from "@/components/Base/Lucide";
import { Menu } from "@/components/Base/Headless";
import Button from "@/components/Base/Button";
import Calendar from "@/components/Calendar";
import { Draggable as FullCalendarDraggable } from "@/components/Base/Calendar";
import { Draggable } from "@fullcalendar/interaction";
import { FormSwitch } from "@/components/Base/Form";

const dragableOptions: Draggable["settings"] = {
  itemSelector: ".event",
  eventData(eventEl) {
    const getDays = () => {
      const days = eventEl.querySelectorAll(".event__days")[0]?.textContent;
      return days ? days : "0";
    };
    return {
      title: eventEl.querySelectorAll(".event__title")[0]?.innerHTML,
      duration: {
        days: parseInt(getDays()),
      },
    };
  },
};
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Calendar</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Button variant="primary" class="mr-2 shadow-md"> Print Schedule </Button>
      <Menu class="ml-auto sm:ml-0">
        <Menu.Button :as="Button" class="px-2 !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="Plus" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="Share2" class="w-4 h-4 mr-2" /> Share
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Settings
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <div class="grid grid-cols-12 gap-5 mt-5">
    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
      <div class="p-5 box intro-y">
        <Button variant="primary" type="button" class="w-full mt-2">
          <Lucide icon="Edit3" class="w-4 h-4 mr-2" /> Add New Schedule
        </Button>
        <FullCalendarDraggable
          id="calendar-events"
          :options="dragableOptions"
          class="py-3 mt-6 mb-5 border-t border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="relative">
            <div
              class="flex items-center p-3 -mx-3 transition duration-300 ease-in-out rounded-md cursor-pointer event hover:bg-slate-100 dark:hover:bg-darkmode-400"
            >
              <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
              <div class="pr-10">
                <div class="truncate event__title">VueJS Amsterdam</div>
                <div class="text-slate-500 text-xs mt-0.5">
                  <span class="event__days">2</span> Days
                  <span class="mx-1">•</span> 10:00 AM
                </div>
              </div>
            </div>
            <a
              class="absolute top-0 bottom-0 right-0 flex items-center my-auto"
              href=""
            >
              <Lucide icon="Edit" class="w-4 h-4 text-slate-500" />
            </a>
          </div>
          <div class="relative">
            <div
              class="flex items-center p-3 -mx-3 transition duration-300 ease-in-out rounded-md cursor-pointer event hover:bg-slate-100 dark:hover:bg-darkmode-400"
            >
              <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
              <div class="pr-10">
                <div class="truncate event__title">Vue Fes Japan 2019</div>
                <div class="text-slate-500 text-xs mt-0.5">
                  <span class="event__days">3</span> Days
                  <span class="mx-1">•</span> 07:00 AM
                </div>
              </div>
            </div>
            <a
              class="absolute top-0 bottom-0 right-0 flex items-center my-auto"
              href=""
            >
              <Lucide icon="Edit" class="w-4 h-4 text-slate-500" />
            </a>
          </div>
          <div class="relative">
            <div
              class="flex items-center p-3 -mx-3 transition duration-300 ease-in-out rounded-md cursor-pointer event hover:bg-slate-100 dark:hover:bg-darkmode-400"
            >
              <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
              <div class="pr-10">
                <div class="truncate event__title">Laracon 2021</div>
                <div class="text-slate-500 text-xs mt-0.5">
                  <span class="event__days">4</span> Days
                  <span class="mx-1">•</span> 11:00 AM
                </div>
              </div>
            </div>
            <a
              class="absolute top-0 bottom-0 right-0 flex items-center my-auto"
              href=""
            >
              <Lucide icon="Edit" class="w-4 h-4 text-slate-500" />
            </a>
          </div>
          <div
            class="hidden p-3 text-center text-slate-500"
            id="calendar-no-events"
          >
            No events yet
          </div>
        </FullCalendarDraggable>
        <FormSwitch class="flex">
          <FormSwitch.Label htmlFor="checkbox-events">
            Remove after drop
          </FormSwitch.Label>
          <FormSwitch.Input
            class="ml-auto"
            type="checkbox"
            id="checkbox-events"
          />
        </FormSwitch>
      </div>
      <div class="p-5 mt-5 box intro-y">
        <div class="flex">
          <Lucide icon="ChevronLeft" class="w-5 h-5 text-slate-500" />
          <div class="mx-auto text-base font-medium">April</div>
          <Lucide icon="ChevronRight" class="w-5 h-5 text-slate-500" />
        </div>
        <div class="grid grid-cols-7 gap-4 mt-5 text-center">
          <div class="font-medium">Su</div>
          <div class="font-medium">Mo</div>
          <div class="font-medium">Tu</div>
          <div class="font-medium">We</div>
          <div class="font-medium">Th</div>
          <div class="font-medium">Fr</div>
          <div class="font-medium">Sa</div>
          <div class="py-0.5 rounded relative text-slate-500">29</div>
          <div class="py-0.5 rounded relative text-slate-500">30</div>
          <div class="py-0.5 rounded relative text-slate-500">31</div>
          <div class="py-0.5 rounded relative">1</div>
          <div class="py-0.5 rounded relative">2</div>
          <div class="py-0.5 rounded relative">3</div>
          <div class="py-0.5 rounded relative">4</div>
          <div class="py-0.5 rounded relative">5</div>
          <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">
            6
          </div>
          <div class="py-0.5 rounded relative">7</div>
          <div class="py-0.5 bg-primary text-white rounded relative">8</div>
          <div class="py-0.5 rounded relative">9</div>
          <div class="py-0.5 rounded relative">10</div>
          <div class="py-0.5 rounded relative">11</div>
          <div class="py-0.5 rounded relative">12</div>
          <div class="py-0.5 rounded relative">13</div>
          <div class="py-0.5 rounded relative">14</div>
          <div class="py-0.5 rounded relative">15</div>
          <div class="py-0.5 rounded relative">16</div>
          <div class="py-0.5 rounded relative">17</div>
          <div class="py-0.5 rounded relative">18</div>
          <div class="py-0.5 rounded relative">19</div>
          <div class="py-0.5 rounded relative">20</div>
          <div class="py-0.5 rounded relative">21</div>
          <div class="py-0.5 rounded relative">22</div>
          <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">
            23
          </div>
          <div class="py-0.5 rounded relative">24</div>
          <div class="py-0.5 rounded relative">25</div>
          <div class="py-0.5 rounded relative">26</div>
          <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">
            27
          </div>
          <div class="py-0.5 rounded relative">28</div>
          <div class="py-0.5 rounded relative">29</div>
          <div class="py-0.5 rounded relative">30</div>
          <div class="py-0.5 rounded relative text-slate-500">1</div>
          <div class="py-0.5 rounded relative text-slate-500">2</div>
          <div class="py-0.5 rounded relative text-slate-500">3</div>
          <div class="py-0.5 rounded relative text-slate-500">4</div>
          <div class="py-0.5 rounded relative text-slate-500">5</div>
          <div class="py-0.5 rounded relative text-slate-500">6</div>
          <div class="py-0.5 rounded relative text-slate-500">7</div>
          <div class="py-0.5 rounded relative text-slate-500">8</div>
          <div class="py-0.5 rounded relative text-slate-500">9</div>
        </div>
        <div
          class="pt-5 mt-5 border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="flex items-center">
            <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
            <span class="truncate">Independence Day</span>
            <div
              class="flex-1 h-px mx-3 border border-r border-dashed border-slate-200 xl:hidden"
            ></div>
            <span class="font-medium xl:ml-auto">23th</span>
          </div>
          <div class="flex items-center mt-4">
            <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
            <span class="truncate">Memorial Day</span>
            <div
              class="flex-1 h-px mx-3 border border-r border-dashed border-slate-200 xl:hidden"
            ></div>
            <span class="font-medium xl:ml-auto">10th</span>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Calendar Side Menu -->
    <!-- BEGIN: Calendar Content -->
    <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
      <div class="p-5 box">
        <Calendar />
      </div>
    </div>
    <!-- END: Calendar Content -->
  </div>
</template>
