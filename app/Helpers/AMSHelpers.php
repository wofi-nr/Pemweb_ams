<?php


use Illuminate\Support\Facades\Session;


/**
 * Menetapkan menu aktif di session.
 *
 * @param string $menu
 * @param string $subMenu
 * @return void
 */
if (!function_exists('setActiveMenu')) {
    function setActiveMenu($menu, $subMenu = NULL) {
        Session::put('active_menu', $menu);
        if ($subMenu) {
            Session::put('sub_active_menu', $subMenu);
        }
    }
}

/**
 * Mengembalikan menu aktif jika ada, atau mengembalikan nilai default.
 *
 * @param string $menu
 * @return string
 */
if (!function_exists('getActiveMenu')) {
    function getActiveMenu($menu) {
        return Session::get('active_menu') === $menu ? 'active' : '';
    }
}

/**
 * Mengembalikan submenu aktif jika ada, atau mengembalikan nilai default.
 *
 * @param string $subMenu
 * @return string
 */
if (!function_exists('getSubActiveMenu')) {
    function getSubActiveMenu($subMenu) {
        return Session::get('sub_active_menu') === $subMenu ? 'active' : '';
    }
}

/**
 * Mengatur untuk mereset status menu aktif.
 *
 * @return void
 */
if (!function_exists('resetMenu')) {
    function resetMenu() {
        Session::forget([
            'active_menu',
            'sub_active_menu',
        ]);
    }
}

/**
 * Kie helper nggo nyimpen sesi login nek bener.
 *
 * @return void
 */
if (!function_exists('loginSukses')) {
    function loginSukses($user) {
        // Nyimpen data user nang sesi
        Session::put('login_status', TRUE);
        Session::put('data_siswa', $user); // Kie nyimpen data_siswa, nggo kebutuhan apalah.
    }
}

/**
 * Kie helper nggo ngecek status login. anu wes login urung wonge
 *
 * @return bool
 */
if (!function_exists('cekLogin')) {
    function cekLogin() {
        return Session::has('login_status') && Session::get('login_status') === TRUE;
    }
}

/**
 * Kie helper nggo logout user. ngapus sisi sing wes kesimpen
 *
 * @return void
 */
if (!function_exists('logout')) {
    function logout() {
        Session::forget('login_status'); // Hapus status login
        Session::forget('user_data');    // Hapus data siswane
        Session::flush();                     // Hapus kabeh sesi (bersih pokoke)
    }
}
