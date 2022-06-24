<template >
    <sidenav/>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Sidenav -->
        <navbar/>
        <!-- End Sidenav -->
        <router-view/>
    </main>
    <tool-drawer/>
</template>

<script>
import Sidenav from "@/components/Sidenav.vue";
import Navbar from "@/components/Navbar.vue";
import ToolDrawer from "@/components/ToolDrawer.vue";
export default {
    name : "Default",
    components : {
        Sidenav,
        Navbar,
        ToolDrawer
    }
}
</script>

<style>
    @import url("@/assets/css/nucleo-icons.css");
    @import url("@/assets/css/nucleo-svg.css");
    @import url("@/assets/css/styles.css");
</style>