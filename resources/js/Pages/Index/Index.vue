<template>

<MainLayout>
    <div>Home Page</div>
    <Link href="/hello">
      Hello Page
    </Link>
    <div>
      The message is {{ message }}
    </div>
    </MainLayout>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/inertia-vue3'
  defineProps({ message: String })
  </script>
