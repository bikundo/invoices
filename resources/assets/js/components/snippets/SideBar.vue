<template>
    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                    <div class="d-table m-auto">
                        <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                             v-bind:src="'images/shards-dashboards-logo.svg'" alt="Shards Dashboard">
                        <span class="d-none d-md-inline ml-1">Invoices</span>
                    </div>
                </a>
            </nav>
        </div>

        <div class="nav-wrapper">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="material-icons">dashboard</i>
                        <span> Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" v-for="item in menuItems">
                    <a class="nav-link " :href="item.link">
                        <i class="material-icons">{{ item.icon}}</i>
                        <span>{{ item.title}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

</template>

<script>
    export default {
        data() {
            return {
                menuItems: [
                    {icon: 'note_add', title: 'Add New', link: '/#'},
                    {icon: 'error', title: 'Errors', link: '/#'},
                ]
            }
        }
    }
</script>