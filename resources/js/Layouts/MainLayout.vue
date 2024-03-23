<template>
    <Link href="/">
      Home
    </Link>
    <Link href="/hello">
      Hello
    </Link>

    <slot></slot>

  </template>

  <script setup>
  import { Link } from '@inertiajs/inertia-vue3'
  </script>
  