<template>
  <div >
    <div>
      <!--========== ADMIN SIDE MENU one ========-->
      <div class="_1side_menu" >
        <div class="_1side_menu_logo">
          <h3 style="text-align:center;">Logo Image</h3>
        </div>

        <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
        <div class="_1side_menu_content">
          <div class="_1side_menu_img_name">
            <!-- <img class="_1side_menu_img" src="/pic.png" alt="" title=""> -->
            <p class="_1side_menu_name">Admin</p>
          </div>

          <!--~~~ MENU LIST ~~~~~~-->
          <div class="_1side_menu_list">
            <ul class="_1side_menu_list_ul">
              <!-- <li><router-link to="{{asset('ddashboard/index')}}"><Icon type="ios-speedometer"  /> Overview</router-link></li>
              <li><router-link to="{{asset('ddashboard/user')}}" ><Icon type="ios-speedometer"  /> Tài khoản</router-link></li> -->
              <li><router-link to="index">Overview</router-link></li>
              <li><router-link to="user" >Tài khoản</router-link></li> 
              <li><router-link to="code" >Mã đăng ký</router-link></li>  

            </ul>
          </div> 
        </div>
      </div>
      <!--========== ADMIN SIDE MENU ========-->

      <!--========= HEADER ==========-->
      <div class="header" style="">
        <div class="_2menu _box_shadow">
         
        </div>
      </div>
      <!--========= HEADER ==========-->
    </div>
    	<router-view/>
  </div>
</template>