<nav class="navigation">
    <div class="navigation-container" id="navigation-container">
        <div class="logo-nav-wrapper">
            <div class="logo-nav">
                <a href="{{route('admin_home')}}">
                    <img src="{{asset('images/logo-navigation/logo-navigation.png')}}" alt="">
                </a>
            </div>
            <div class="ham-btn" id="ham-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navigation-links-wrapper" id="navbar">
            <ul>
                <li><a href="{{route('admin_home')}}">Validasi Reservasi</a></li>
                <li><a href="/view/tambah-jadwal-reservasi">Tambah Jadwal Reservasi</a></li>
                <li class="right">
                    <div class="auth-wrapper" id="auth-wrapper" onclick="onToggle()">
                        <div class="profile-wrapper" id="profile-wrapper">
                            <img src="{{asset('images/assets/logo-account.png')}}" class="logo-account">
                            <img src="{{asset('images/assets/logo-account-white.png')}}" class="logo-account-white">
                            <a href="#">{{Auth::user()->name}}</a>
                        </div>
                        <ul>
                            <li>
                                <a href="#asda">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.7618 11.5536C23.7618 5.41695 18.6185 0.4375 12.2813 0.4375C5.94405 0.4375 0.800781 5.41695 0.800781 11.5536C0.800781 14.9336 2.38509 17.9796 4.86489 20.0243C4.88785 20.0465 4.91081 20.0465 4.91081 20.0688C5.11746 20.2246 5.32411 20.3804 5.55372 20.5361C5.66852 20.6029 5.76037 20.6905 5.87517 20.7795C7.77242 22.0263 10.012 22.6925 12.3043 22.692C14.5965 22.6925 16.8361 22.0263 18.7334 20.7795C18.8482 20.7128 18.94 20.6252 19.0548 20.557C19.2615 20.4026 19.4911 20.2468 19.6977 20.091C19.7207 20.0688 19.7436 20.0688 19.7436 20.0465C22.1775 17.9783 23.7618 14.9336 23.7618 11.5536ZM12.2813 21.2914C10.123 21.2914 8.14831 20.6238 6.51808 19.5124C6.54104 19.3344 6.58696 19.1577 6.63289 18.9797C6.7697 18.4972 6.97036 18.0339 7.22987 17.6013C7.48244 17.1785 7.78094 16.8002 8.14831 16.4663C8.49273 16.1325 8.90603 15.8223 9.31933 15.5775C9.75559 15.3327 10.2148 15.1547 10.72 15.0212C11.229 14.8882 11.7541 14.8213 12.2813 14.8223C13.8465 14.8115 15.3541 15.3934 16.4832 16.4441C17.0113 16.9559 17.4246 17.5568 17.7231 18.2453C17.8838 18.6459 17.9986 19.0687 18.0675 19.5124C16.3729 20.6671 14.3527 21.2882 12.2813 21.2914ZM8.76826 10.9987C8.56595 10.5497 8.46421 10.0643 8.46977 9.57438C8.46977 9.08617 8.56161 8.59657 8.76826 8.15148C8.97491 7.70639 9.25044 7.3072 9.59486 6.97338C9.93927 6.63956 10.3526 6.3739 10.8118 6.17361C11.271 5.97332 11.7762 5.8843 12.2813 5.8843C12.8094 5.8843 13.2916 5.97332 13.7508 6.17361C14.21 6.3739 14.6233 6.64095 14.9677 6.97338C15.3122 7.3072 15.5877 7.70778 15.7943 8.15148C16.001 8.59657 16.0928 9.08617 16.0928 9.57438C16.0928 10.0862 16.001 10.5536 15.7943 10.9973C15.5949 11.4358 15.3148 11.8355 14.9677 12.1768C14.6155 12.5127 14.2031 12.7837 13.7508 12.9765C12.802 13.3545 11.7377 13.3545 10.7888 12.9765C10.3365 12.7837 9.92416 12.5127 9.5719 12.1768C9.22435 11.8404 8.95094 11.4405 8.76826 10.9987ZM19.4222 18.3788C19.4222 18.3343 19.3992 18.3121 19.3992 18.2676C19.1734 17.5713 18.8405 16.912 18.4119 16.3119C17.9828 15.7074 17.4556 15.1743 16.8505 14.7333C16.3885 14.3964 15.8877 14.1126 15.3581 13.8876C15.599 13.7335 15.8222 13.555 16.0239 13.3549C16.3663 13.0273 16.6669 12.6612 16.9194 12.2644C17.428 11.4546 17.6906 10.5223 17.6771 9.57438C17.6842 8.87269 17.5436 8.17696 17.2638 7.52975C16.9876 6.90612 16.59 6.3399 16.0928 5.86205C15.5964 5.38918 15.0121 5.01163 14.3708 4.74932C13.7019 4.47864 12.9831 4.34282 12.2583 4.35013C11.5334 4.34326 10.8147 4.47955 10.1459 4.75071C9.49907 5.01246 8.91336 5.39802 8.42385 5.8843C7.93598 6.36498 7.54644 6.93085 7.27579 7.552C6.99603 8.19922 6.85539 8.89494 6.8625 9.59664C6.8625 10.0862 6.93138 10.5536 7.06914 10.9973C7.20691 11.4646 7.3906 11.8875 7.64317 12.2867C7.87278 12.6872 8.19424 13.0433 8.53865 13.3771C8.7453 13.5774 8.97491 13.7541 9.22748 13.9098C8.69627 14.1408 8.19527 14.4322 7.73501 14.7778C7.13803 15.2229 6.60992 15.7556 6.17366 16.3342C5.74065 16.9318 5.40745 17.5917 5.18634 18.2898C5.16338 18.3343 5.16338 18.3788 5.16338 18.4011C3.34946 16.6221 2.22437 14.2214 2.22437 11.5536C2.22437 6.19586 6.74769 1.81589 12.2813 1.81589C17.8149 1.81589 22.3382 6.19586 22.3382 11.5536C22.3352 14.1129 21.2868 16.5668 19.4222 18.3788Z"
                                            fill="#024788" />
                                    </svg>
                                    <span>Akun</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="#024788" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12.9046 3.06005C12.6988 3 12.4659 3 12 3C11.5341 3 11.3012 3 11.0954 3.06005C10.7942 3.14794 10.5281 3.32808 10.3346 3.57511C10.2024 3.74388 10.1159 3.96016 9.94291 4.39272C9.69419 5.01452 9.00393 5.33471 8.36857 5.123L7.79779 4.93281C7.3929 4.79785 7.19045 4.73036 6.99196 4.7188C6.70039 4.70181 6.4102 4.77032 6.15701 4.9159C5.98465 5.01501 5.83376 5.16591 5.53197 5.4677C5.21122 5.78845 5.05084 5.94882 4.94896 6.13189C4.79927 6.40084 4.73595 6.70934 4.76759 7.01551C4.78912 7.2239 4.87335 7.43449 5.04182 7.85566C5.30565 8.51523 5.05184 9.26878 4.44272 9.63433L4.16521 9.80087C3.74031 10.0558 3.52786 10.1833 3.37354 10.3588C3.23698 10.5141 3.13401 10.696 3.07109 10.893C3 11.1156 3 11.3658 3 11.8663C3 12.4589 3 12.7551 3.09462 13.0088C3.17823 13.2329 3.31422 13.4337 3.49124 13.5946C3.69158 13.7766 3.96395 13.8856 4.50866 14.1035C5.06534 14.3261 5.35196 14.9441 5.16236 15.5129L4.94721 16.1584C4.79819 16.6054 4.72367 16.829 4.7169 17.0486C4.70875 17.3127 4.77049 17.5742 4.89587 17.8067C5.00015 18.0002 5.16678 18.1668 5.5 18.5C5.83323 18.8332 5.99985 18.9998 6.19325 19.1041C6.4258 19.2295 6.68733 19.2913 6.9514 19.2831C7.17102 19.2763 7.39456 19.2018 7.84164 19.0528L8.36862 18.8771C9.00393 18.6654 9.6942 18.9855 9.94291 19.6073C10.1159 20.0398 10.2024 20.2561 10.3346 20.4249C10.5281 20.6719 10.7942 20.8521 11.0954 20.94C11.3012 21 11.5341 21 12 21C12.4659 21 12.6988 21 12.9046 20.94C13.2058 20.8521 13.4719 20.6719 13.6654 20.4249C13.7976 20.2561 13.8841 20.0398 14.0571 19.6073C14.3058 18.9855 14.9961 18.6654 15.6313 18.8773L16.1579 19.0529C16.605 19.2019 16.8286 19.2764 17.0482 19.2832C17.3123 19.2913 17.5738 19.2296 17.8063 19.1042C17.9997 18.9999 18.1664 18.8333 18.4996 18.5001C18.8328 18.1669 18.9994 18.0002 19.1037 17.8068C19.2291 17.5743 19.2908 17.3127 19.2827 17.0487C19.2759 16.8291 19.2014 16.6055 19.0524 16.1584L18.8374 15.5134C18.6477 14.9444 18.9344 14.3262 19.4913 14.1035C20.036 13.8856 20.3084 13.7766 20.5088 13.5946C20.6858 13.4337 20.8218 13.2329 20.9054 13.0088C21 12.7551 21 12.4589 21 11.8663C21 11.3658 21 11.1156 20.9289 10.893C20.866 10.696 20.763 10.5141 20.6265 10.3588C20.4721 10.1833 20.2597 10.0558 19.8348 9.80087L19.5569 9.63416C18.9478 9.26867 18.6939 8.51514 18.9578 7.85558C19.1262 7.43443 19.2105 7.22383 19.232 7.01543C19.2636 6.70926 19.2003 6.40077 19.0506 6.13181C18.9487 5.94875 18.7884 5.78837 18.4676 5.46762C18.1658 5.16584 18.0149 5.01494 17.8426 4.91583C17.5894 4.77024 17.2992 4.70174 17.0076 4.71872C16.8091 4.73029 16.6067 4.79777 16.2018 4.93273L15.6314 5.12287C14.9961 5.33464 14.3058 5.0145 14.0571 4.39272C13.8841 3.96016 13.7976 3.74388 13.6654 3.57511C13.4719 3.32808 13.2058 3.14794 12.9046 3.06005Z"
                                            stroke="#024788" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>Pengaturan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('user_logout')}}">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 16L21 12M21 12L17 8M21 12H9M13 21H6.20078C5.08068 21 4.52062 21 4.0928 20.782C3.71648 20.5903 3.41052 20.2843 3.21877 19.908C3.00078 19.4802 3.00078 18.9201 3.00078 17.8V6.2C3.00078 5.0799 3.00078 4.51984 3.21877 4.09202C3.41052 3.71569 3.71648 3.40973 4.0928 3.21799C4.52062 3 5.08068 3 6.20078 3L13 3"
                                            stroke="#024788" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script>
var ham_btn = document.getElementById("ham-btn");
var nav_con = document.getElementById("navigation-container");
ham_btn.addEventListener("click", () => {
    ham_btn.classList.toggle("change");
    nav_con.classList.toggle("toggle");
});

function onToggle() {
    var authW = document.getElementById("auth-wrapper");
    var profileW = document.getElementById("profile-wrapper");
    profileW.addEventListener("click", () => {
        profileW.classList.toggle('clicked');
        const parent = profileW.parentNode;
        parent.classList.toggle('change')
    })

}
</script>