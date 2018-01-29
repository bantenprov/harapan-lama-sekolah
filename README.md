# harapan-lama-sekolah
Harapan lama Sekolah 

[![Join the chat at https://gitter.im/hl-sekolah/Lobby](https://badges.gitter.im/hl-sekolah/Lobby.svg)](https://gitter.im/hl-sekolah/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/hl-sekolah/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/hl-sekolah/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/hl-sekolah/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/hl-sekolah/build-status/master)


### install via composer

- Development snapshot
```bash
$ composer require bantenprov/harapan-lama-sekolah:dev-master
```
- Latest release:


## download via github

~~~bash
$ git clone https://github.com/bantenprov/harapan-lama-sekolah.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\HlSekolah\HlSekolahServiceProvider::class,

```

#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/hl-sekolah',
    components: {
      main: resolve => require(['./components/views/bantenprov/hl-sekolah/DashboardHlSekolah.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Harapan Lama Sekolah"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/hl-sekolah',
      components: {
        main: resolve => require(['./components/bantenprov/hl-sekolah/HlSekolahAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Harapan Lama Sekolah"
      }
    }
 //== ...   
  ]
},

```

#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Harapan Lama Sekolah',
          link: '/dashboard/hl-sekolah',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
```


#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import HlSekolah from './components/bantenprov/hl-sekolah/HlSekolah.chart.vue';
Vue.component('echarts-hl-sekolah', HlSekolah);

import HlSekolahKota from './components/bantenprov/hl-sekolah/HlSekolahKota.chart.vue';
Vue.component('echarts-hl-sekolah-kota', HlSekolahKota);

import HlSekolahTahun from './components/bantenprov/hl-sekolah/HlSekolahTahun.chart.vue';
Vue.component('echarts-hl-sekolah-tahun', HlSekolahTahun);

import HlSekolahAdminShow from './components/bantenprov/hl-sekolah/HlSekolahAdmin.show.vue';
Vue.component('admin-view-hl-sekolah-tahun', HlSekolahAdminShow);

//== Echarts Harapan Lama sekolah

import HlSekolahBar01 from './components/views/bantenprov/hl-sekolah/HlSekolahBar01.vue';
Vue.component('hl-sekolah-bar-01', HlSekolahBar01);

import HlSekolahBar02 from './components/views/bantenprov/hl-sekolah/HlSekolahBar02.vue';
Vue.component('hl-sekolah-bar-02', HlSekolahBar02);

//== mini bar charts
import HlSekolahBar03 from './components/views/bantenprov/hl-sekolah/HlSekolahBar03.vue';
Vue.component('hl-sekolah-bar-03', HlSekolahBar03);

import HlSekolahPie01 from './components/views/bantenprov/hl-sekolah/HlSekolahPie01.vue';
Vue.component('hl-sekolah-pie-01', HlSekolahPie01);

import HlSekolahPie02 from './components/views/bantenprov/hl-sekolah/HlSekolahPie02.vue';
Vue.component('hl-sekolah-pie-02', HlSekolahPie02);

//== mini pie charts
import HlSekolahPie03 from './components/views/bantenprov/hl-sekolah/HlSekolahPie03.vue';
Vue.component('hl-sekolah-pie-03', HlSekolahPie03);
```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=hl-sekolah-assets
$ php artisan vendor:publish --tag=hl-sekolah-public
```
