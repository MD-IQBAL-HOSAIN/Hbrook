<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('homepage') }}" class="app-brand-link">
            {{-- <span class="app-brand-logo demo"> --}}
                {{-- <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"></path>
                        <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"></path>
                        <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"></path>
                        <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                </g>
                                <g id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg> --}}
                <svg width="150" height="58" viewBox="0 0 254 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Jean Renard">
                    <path d="M34.1263 18.2132C33.721 19.7188 31.7521 25.4516 31.3468 26.2623C31.0572 26.7834 31.1151 26.8414 31.8679 26.436C32.3312 26.2623 32.6207 26.2623 33.1998 26.6097C34.4158 27.1888 34.1842 27.6521 31.81 29.0418L29.6675 30.3158L28.4514 32.8058C26.193 37.2646 23.1819 41.9551 19.997 45.8928C17.9123 48.4986 11.0793 55.2158 9.51584 56.2581C7.02584 57.8795 5.40444 58.2269 3.89886 57.4741C2.21956 56.6055 1.98793 55.5632 2.91444 53.0732C4.65165 48.3248 9.86328 42.3025 16.6384 37.0909C19.3021 35.0641 23.9347 31.5897 25.0928 30.779C26.3668 29.8525 26.4247 29.7367 28.3356 24.6988C30.9414 17.8658 32.2733 11.496 31.9258 7.73205C31.6363 4.08392 30.8835 3.27321 28.1619 3.27321C25.614 3.27321 23.0661 4.25763 19.36 6.68973C16.6963 8.48484 15.7119 9.29554 12.527 12.4804C8.29979 16.6497 5.80979 19.8925 3.84095 23.7723C2.79863 25.8569 2.62491 26.7255 3.20398 27.1888C3.84095 27.71 3.60932 27.9995 2.567 27.8258C1.40886 27.71 0.308627 26.7255 0.0769992 25.7411C-0.212536 24.4672 1.17723 21.2244 3.49351 17.6341C10.037 7.67415 19.9391 0.14624 26.4247 0.14624C29.8991 0.14624 33.0261 2.69415 34.5317 6.74763C35.4003 9.06391 35.2265 13.8123 34.1263 18.2132ZM19.7654 41.5497C20.9814 39.8704 23.9926 34.8904 23.8768 34.7746C23.6451 34.543 16.6963 40.4495 13.5114 43.6344C8.53142 48.5565 5.69398 52.4941 5.11491 55.3895C4.99909 56.0844 4.99909 56.1423 5.40444 56.0265C5.63607 55.9107 6.56258 55.3895 7.37328 54.7525C10.3265 52.7258 16.291 46.356 19.7654 41.5497Z" fill="#222222"/>
                    <path d="M52.4249 34.2534C51.8458 34.7167 50.9772 35.4116 50.514 35.8169C49.3558 36.8014 49.1242 36.9751 46.2289 39.1176C41.7121 42.5341 39.4537 43.1711 36.9058 41.6076C34.7633 40.3337 33.8947 38.1332 34.4737 35.2958C35.0528 32.4583 38.0061 28.7523 39.917 28.3469C41.6542 28.0574 43.5651 29.6788 43.5651 31.4739C43.5651 34.1955 41.0751 36.8593 38.4693 36.8593H37.6007L37.7165 40.3337H38.8747C40.2644 40.2758 42.0596 39.4072 44.897 37.3804C46.113 36.5697 47.0975 35.759 47.1554 35.7011C47.2712 35.6432 48.3714 34.7167 49.6454 33.6744C51.9617 31.8214 52.0775 31.7634 52.6565 32.1109C53.6409 32.69 53.583 33.3848 52.4249 34.2534ZM40.4961 31.5318C39.8012 32.1109 38.5851 34.0218 38.5851 34.3693C38.5851 34.6009 38.9326 34.4851 39.4537 34.0797C40.2065 33.5007 41.191 31.8793 41.191 31.3002C41.191 30.8369 41.133 30.8948 40.4961 31.5318Z" fill="#222222"/>
                    <path d="M59.4018 30.4316C57.6646 31.2423 53.7848 35.2958 52.2213 37.8437C51.7002 38.7702 51.7002 38.7702 52.1634 38.5386C52.453 38.3648 53.4953 37.4383 54.5376 36.4539C57.1434 33.906 58.012 33.3848 59.0543 33.5586C59.5176 33.6165 60.3862 34.0797 60.9653 34.543C61.776 35.18 62.0076 35.5853 62.1813 36.396C62.2392 36.9172 62.4709 37.67 62.6446 38.0753L62.9341 38.7702L64.7871 37.3225C65.8295 36.5697 67.7404 35.0062 69.0723 33.906C70.6357 32.5162 71.5623 31.8793 71.8518 31.9372C72.373 32.1109 73.2995 32.9216 73.2995 33.2111C73.2995 33.3269 71.9097 34.6009 70.2304 36.1065C68.5511 37.6121 66.9876 39.0597 66.6981 39.3493C64.903 41.0286 63.9185 41.3181 62.413 40.6811C61.139 40.1021 59.9809 38.9439 59.4597 37.7279C59.1702 36.9172 58.7069 36.5118 58.7069 36.9751C58.7069 37.0909 58.3595 37.3804 58.012 37.6121C57.6646 37.7858 57.0276 38.3069 56.6223 38.6544C54.7113 40.4495 51.8739 42.3604 51.179 42.3025C51.0053 42.3025 50.4841 42.1288 49.963 41.9551C49.4418 41.7814 48.7469 41.376 48.3995 41.0286C47.1255 39.6967 47.8204 36.9751 50.3683 33.269C53.3795 28.8681 57.4909 26.0307 59.6913 26.7255C60.8495 27.1309 62.355 28.6944 62.2392 29.4472C62.1813 29.9104 62.0076 29.9683 61.1969 30.0262C60.6757 30.0262 59.865 30.2 59.4018 30.4316Z" fill="#222222"/>
                    <path d="M71.3754 40.9128C69.9856 40.0441 69.754 39.5809 69.8119 37.67C69.8698 34.1376 72.3019 29.1576 73.9812 29.1576C74.6182 29.1576 76.008 29.9683 76.2396 30.4895C76.3554 30.8948 76.2975 31.1265 75.0236 33.3848C74.155 34.8904 73.0547 37.9595 73.2863 38.1911C73.4022 38.249 75.1973 36.5697 77.3398 34.4851C79.6561 32.1688 81.5091 30.5474 81.8566 30.4316C82.8989 30.2 83.7096 30.5474 84.7519 31.5318C85.5047 32.3425 85.6205 32.5741 85.6205 33.6165C85.6784 35.18 86.0838 38.0753 86.3733 38.3069C86.8366 38.8281 87.9368 38.1911 92.801 34.3693C95.4068 32.2846 95.9859 32.1109 96.8545 33.0953L97.4336 33.6165L95.1752 35.5274C93.9012 36.5697 92.5694 37.67 92.1061 38.0174C91.7008 38.3069 90.948 38.886 90.4847 39.2334C90.0215 39.5809 89.2108 40.1021 88.5738 40.3337L87.4736 40.739L86.1996 40.0441C83.8254 38.8281 82.7831 36.9172 82.7831 34.0218V32.9216L81.5091 34.0218C80.8143 34.6009 79.0191 36.3381 77.5136 37.9016C75.9501 39.4072 74.4445 40.8548 74.097 41.0286C73.2284 41.4918 72.244 41.4339 71.3754 40.9128Z" fill="#222222"/>
                    <path d="M152.225 57.59C150.082 57.0688 147.766 56.0844 139.254 51.973C134.447 49.5988 131.263 48.1511 131.147 48.1511C131.089 48.1511 130.336 47.8037 129.525 47.3983C128.715 46.993 127.962 46.7034 127.788 46.7034C127.614 46.7034 127.267 47.4562 126.977 48.4407C126.225 50.9307 125.298 52.8995 124.835 52.9574C124.198 53.1311 122.403 52.4362 122.171 51.973C121.997 51.6255 122.403 50.1779 123.85 45.4295C124.024 44.8504 123.908 44.7346 122.519 43.8081C120.029 42.2446 119.681 41.3181 121.013 40.1021C121.824 39.3493 122.634 38.7702 124.024 38.0174C126.456 36.6855 126.63 36.5118 127.151 34.7746C127.788 32.7479 127.788 32.4583 127.209 31.2423C126.514 29.6788 125.588 29.1576 121.94 28.4048C120.955 28.1732 119.565 27.8837 118.928 27.71C113.601 26.5518 112.095 25.6253 112.095 23.309C112.095 19.9504 118.755 13.1753 126.804 8.48484C132.536 5.06833 141.049 1.82554 146.608 0.841122C147.071 0.783216 147.708 0.667403 147.998 0.609497C148.345 0.493681 149.851 0.435775 151.356 0.435775C155.294 0.435775 157.494 1.07275 159.753 2.86787C162.127 4.7788 163.111 7.03717 162.59 9.41135C161.722 13.5228 158.884 17.4025 152.514 22.9616C147.708 27.1888 141.686 31.3581 133.058 36.396L130.394 37.9016L129.294 41.2602L128.193 44.6767L133.521 47.2825C136.416 48.7302 140.991 51.1044 143.713 52.4941C149.33 55.3316 151.009 56.0844 152.341 56.1423C153.788 56.2581 154.889 57.4741 153.846 57.7637C153.615 57.8216 152.862 57.7637 152.225 57.59ZM124.777 42.2446C125.124 41.376 124.893 41.2602 124.198 41.8972C123.735 42.3025 123.677 42.5341 123.908 42.65C124.372 42.9974 124.545 42.8816 124.777 42.2446ZM127.499 28.8681L128.888 29.6788L129.062 29.1576C129.178 28.8681 129.699 27.4783 130.162 26.0886C133.058 18.0974 135.548 12.8858 137.285 11.5539C137.806 11.1486 139.138 11.6697 139.833 12.5383L140.354 13.2332L139.717 14.2176C138.269 16.5918 135.2 23.8302 132.768 30.8369L131.784 33.5007L132.652 32.9795C133.116 32.69 133.81 32.2846 134.158 32.053C134.505 31.8214 134.853 31.5897 134.911 31.5897C135.432 31.5897 145.044 24.6409 147.998 22.0351C155.699 15.4916 160.737 7.50042 158.884 4.8367C158.305 3.9681 155.526 3.50484 151.993 3.67857C147.592 3.85229 143.886 4.7788 136.185 7.73205C134.563 8.31112 129.178 11.0907 127.325 12.2488C120.839 16.4181 115.454 21.8614 115.454 24.3514V25.1041L118.291 25.7411C122.519 26.6676 125.993 27.8837 127.499 28.8681Z" fill="#222222"/>
                    <path d="M168.522 34.2534C167.943 34.7167 167.074 35.4116 166.611 35.8169C165.453 36.8014 165.221 36.9751 162.326 39.1176C157.809 42.5341 155.55 43.1711 153.003 41.6076C150.86 40.3337 149.991 38.1332 150.57 35.2958C151.15 32.4583 154.103 28.7523 156.014 28.3469C157.751 28.0574 159.662 29.6788 159.662 31.4739C159.662 34.1955 157.172 36.8593 154.566 36.8593H153.697L153.813 40.3337H154.971C156.361 40.2758 158.156 39.4072 160.994 37.3804C162.21 36.5697 163.194 35.759 163.252 35.7011C163.368 35.6432 164.468 34.7167 165.742 33.6744C168.058 31.8214 168.174 31.7634 168.753 32.1109C169.738 32.69 169.68 33.3848 168.522 34.2534ZM156.593 31.5318C155.898 32.1109 154.682 34.0218 154.682 34.3693C154.682 34.6009 155.029 34.4851 155.55 34.0797C156.303 33.5007 157.288 31.8793 157.288 31.3002C157.288 30.8369 157.23 30.8948 156.593 31.5318Z" fill="#222222"/>
                    <path d="M167.623 40.9128C166.233 40.0441 166.002 39.5809 166.06 37.67C166.118 34.1376 168.55 29.1576 170.229 29.1576C170.866 29.1576 172.256 29.9683 172.487 30.4895C172.603 30.8948 172.545 31.1265 171.271 33.3848C170.403 34.8904 169.302 37.9595 169.534 38.1911C169.65 38.249 171.445 36.5697 173.588 34.4851C175.904 32.1688 177.757 30.5474 178.104 30.4316C179.147 30.2 179.957 30.5474 181 31.5318C181.752 32.3425 181.868 32.5741 181.868 33.6165C181.926 35.18 182.332 38.0753 182.621 38.3069C183.084 38.8281 184.185 38.1911 189.049 34.3693C191.655 32.2846 192.234 32.1109 193.102 33.0953L193.681 33.6165L191.423 35.5274C190.149 36.5697 188.817 37.67 188.354 38.0174C187.948 38.3069 187.196 38.886 186.732 39.2334C186.269 39.5809 185.458 40.1021 184.822 40.3337L183.721 40.739L182.447 40.0441C180.073 38.8281 179.031 36.9172 179.031 34.0218V32.9216L177.757 34.0218C177.062 34.6009 175.267 36.3381 173.761 37.9016C172.198 39.4072 170.692 40.8548 170.345 41.0286C169.476 41.4918 168.492 41.4339 167.623 40.9128Z" fill="#222222"/>
                    <path d="M199.815 30.4316C198.078 31.2423 194.198 35.2958 192.634 37.8437C192.113 38.7702 192.113 38.7702 192.577 38.5386C192.866 38.3648 193.908 37.4383 194.951 36.4539C197.557 33.906 198.425 33.3848 199.467 33.5586C199.931 33.6165 200.799 34.0797 201.378 34.543C202.189 35.18 202.421 35.5853 202.594 36.396C202.652 36.9172 202.884 37.67 203.058 38.0753L203.347 38.7702L205.2 37.3225C206.243 36.5697 208.154 35.0062 209.485 33.906C211.049 32.5162 211.975 31.8793 212.265 31.9372C212.786 32.1109 213.713 32.9216 213.713 33.2111C213.713 33.3269 212.323 34.6009 210.644 36.1065C208.964 37.6121 207.401 39.0597 207.111 39.3493C205.316 41.0286 204.332 41.3181 202.826 40.6811C201.552 40.1021 200.394 38.9439 199.873 37.7279C199.583 36.9172 199.12 36.5118 199.12 36.9751C199.12 37.0909 198.773 37.3804 198.425 37.6121C198.078 37.7858 197.441 38.3069 197.035 38.6544C195.124 40.4495 192.287 42.3604 191.592 42.3025C191.418 42.3025 190.897 42.1288 190.376 41.9551C189.855 41.7814 189.16 41.376 188.813 41.0286C187.539 39.6967 188.233 36.9751 190.781 33.269C193.793 28.8681 197.904 26.0307 200.104 26.7255C201.263 27.1309 202.768 28.6944 202.652 29.4472C202.594 29.9104 202.421 29.9683 201.61 30.0262C201.089 30.0262 200.278 30.2 199.815 30.4316Z" fill="#222222"/>
                    <path d="M229.045 28.6365C228.524 29.4472 226.439 30.4316 224.991 30.6053C224.412 30.6632 223.312 30.6053 222.617 30.3737C221.227 30.0262 221.285 30.0262 220.011 31.2423C218.042 33.0374 214.568 38.7702 213.757 41.5497C213.526 42.3604 213.41 42.4762 212.715 42.4762C212.31 42.4762 211.789 42.3604 211.499 42.2446C210.515 41.8393 210.341 41.376 210.515 39.2914C210.746 36.9172 211.557 33.5586 212.889 29.6788C214.047 26.1465 214.915 24.5251 215.495 24.5251C216.884 24.5251 218.564 25.9728 218.216 26.8414C218.158 27.073 217.811 27.9995 217.463 28.8102L216.884 30.3737L217.927 29.3314C219.143 28.2311 218.969 28.2311 222.675 28.7523C224.007 28.926 225.281 28.5786 226.439 27.71C227.308 27.0151 228.176 27.0151 228.929 27.5941C229.45 28.0574 229.45 28.0574 229.045 28.6365Z" fill="#222222"/>
                    <path d="M253.327 5.24205C254.254 6.11066 254.37 5.6474 252.227 10.9169C248.347 20.4137 246.263 25.9728 244.699 30.6632C244.12 32.3425 243.657 33.8481 243.599 34.0218C243.541 34.2534 243.194 35.2958 242.904 36.4539C241.92 39.5809 240.935 43.5765 240.24 46.8193C239.545 50.3516 239.314 55.4474 239.835 55.7948C240.067 55.9107 240.124 56.2002 240.009 56.4897C239.835 57.0688 238.851 57.1846 237.808 56.7793C237.055 56.4897 236.766 55.6211 236.534 52.9574C236.303 50.9307 236.534 46.993 236.882 44.9083C237.287 42.9974 238.04 39.6967 238.561 37.7279C238.908 36.5118 239.198 35.4695 239.198 35.3537C239.198 35.2379 238.735 35.8169 238.214 36.5697C236.361 39.1755 234.623 41.1444 233.813 41.5497C232.075 42.3604 229.47 41.7814 228.543 40.3337C227.79 39.2914 227.906 36.5697 228.775 34.6009C229.528 32.7479 231.149 30.1421 232.539 28.4628C234.739 25.8569 237.461 24.6409 239.545 25.3358C240.124 25.5674 240.704 25.6253 240.819 25.5674C240.877 25.4516 243.251 20.7032 246.089 15.0283C250.837 5.53159 251.301 4.72089 251.88 4.60507C252.343 4.60507 252.806 4.7788 253.327 5.24205ZM233.465 37.8437C235.434 35.4116 239.893 27.9995 239.603 27.6521C239.372 27.4204 237.403 28.926 236.129 30.2579C234.16 32.4004 232.249 36.1065 231.844 38.3069C231.728 39.2914 231.728 39.3493 232.191 39.1176C232.423 38.9439 233.002 38.3648 233.465 37.8437Z" fill="#222222"/>
                    </g>
                    </svg>

            {{-- </span> --}}
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : ' ' }}">
            <a class="menu-link" href="{{ route('dashboard') }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <!-- CMS -->
        <li class="menu-header menu-item small text-uppercase"><span class="menu-header-text">CMS</span></li>

        <li class="menu-item {{ Request::routeIs('upcomming.slider-image.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-album"></i>
                <div data-i18n="Layouts">Upcomming Album</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('upcomming.slider-image.*') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('upcomming.slider-image.index') }}">Upcomming Album</a></li>
            </ul>
        </li>

        <li
            class="menu-item {{ Request::routeIs('cms.landing-page.*') || Request::routeIs('feature-album.*') || Request::routeIs('gallary-image.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Layouts">Landing Page</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('cms.landing-page.banner') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.banner') }}">Stream Header</a></li>

                <li class="menu-item {{ Request::routeIs('cms.landing-page.biography') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.biography') }}">Biography</a></li>

                <li class="menu-item {{ Request::routeIs('cms.landing-page.biography.profile') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.biography.profile') }}">Biography Profile</a>
                </li>

                <li class="menu-item {{ Request::routeIs('cms.landing-page.feature-album-header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.feature-album-header') }}">Feature Album Header</a>
                </li>
                {{-- <li class="menu-item {{ Request::routeIs('cms.landing-page.feature-album') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.feature-album') }}">Feature Album</a>
                </li> --}}

                <li class="menu-item {{ Request::routeIs('feature-album.*') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('feature-album.index') }}">Feature Album
                        </a>
                </li>

                <li class="menu-item {{ Request::routeIs('cms.landing-page.store') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.store') }}">Store</a></li>

                <li class="menu-item {{ Request::routeIs('cms.landing-page.media') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.landing-page.media') }}">Media</a></li>

                <li class="menu-item {{ Request::routeIs('gallary-image.*') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('gallary-image.index') }}">Gallary Image</a></li>

            </ul>
        </li>

        <li
            class="menu-item {{ Request::routeIs('cms.biography-page.*') || Request::routeIs('biography.gallary-image.*') || Request::routeIs('biography.composition.gallary-image.*') || Request::routeIs('achivement.*') || Request::routeIs('achivement.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-store-alt"></i>
                <div data-i18n="Layouts">Biography Page</div>
              </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('cms.biography-page.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.biography-page.header') }}">Header</a></li>
                <li class="menu-item {{ Request::routeIs('cms.biography-page.content') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.biography-page.content') }}">Biography</a></li>
                <li class="menu-item {{ Request::routeIs('cms.biography-page.achievement.header') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('cms.biography-page.achievement.header') }}">Achievement
                        Header</a>
                </li>
                <li class="menu-item {{ Request::routeIs('achivement.*') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('achivement.index') }}">Achievement
                        </a>
                </li>
                <li class="menu-item {{ Request::routeIs('cms.biography-page.gallay.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.biography-page.gallay.header') }}">Gallary Header</a>
                </li>
                <li class="menu-item {{ Request::routeIs('biography.gallary-image.*') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('biography.gallary-image.index') }}">Gallary Image</a></li>

                <li class="menu-item {{ Request::routeIs('cms.biography-page.composition.header') ? 'active' : '' }}">
                    <a class="menu-link" href="{{ route('cms.biography-page.composition.header') }}">Composition
                        Header</a>
                </li>
                <li class="menu-item {{ Request::routeIs('biography.composition.gallary-image.*') ? 'active' : '' }}"><a
                    class="menu-link" href="{{ route('biography.composition.gallary-image.index') }}">Compositon Images</a></li>

            </ul>
        </li>

        <li
            class="menu-item {{ Request::routeIs('cms.discography-page.*') || Request::routeIs('discography.gallary-image.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Layouts">Discography Page</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('cms.discography-page.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.discography-page.header') }}">Header</a></li>

                <li class="menu-item {{ Request::routeIs('cms.discography-page.slider.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.discography-page.slider.header') }}">Slider Header</a></li>

                <li class="menu-item {{ Request::routeIs('discography.gallary-image.*') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('discography.gallary-image.index') }}">Gallary Image</a></li>

            </ul>
        </li>

        <li
            class="menu-item {{ Request::routeIs('cms.media-page.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Layouts">Media Page</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('cms.media-page.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.media-page.header') }}">Header</a></li>
                <li class="menu-item {{ Request::routeIs('cms.media-page.gallay.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.media-page.gallay.header') }}">Gallary Header</a></li>
                <li class="menu-item {{ Request::routeIs('cms.media-page.interview.*') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.media-page.interview.index') }}">Interviews</a></li>

            </ul>
        </li>

        <li
            class="menu-item {{ Request::routeIs('cms.shop-page.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-shopping-bag"></i>
                <div data-i18n="Layouts">Shop Page</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('cms.shop-page.header') ? 'active' : '' }}"><a
                        class="menu-link" href="{{ route('cms.shop-page.header') }}">Header</a></li>

            </ul>
        </li>

        <li class="menu-item {{ Request::routeIs('interview') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Live Interview</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('interview') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('interview') }}">Interview</a></li>
            </ul>
        </li>

        <li class="menu-item {{ Request::routeIs('note') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div data-i18n="Layouts">Notes</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('note') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('note') }}">Notes</a></li>
            </ul>
        </li>

             <!-- Blogs -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">Blogs</span></li>
             <!-- Layouts -->
             <li
                 class="menu-item  {{ Request::routeIs('tags.*') || Request::routeIs('blogs.*') ? 'active open' : '' }}">
                 <a href="javascript:void(0);" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons bx bxl-blogger"></i>
                     <div data-i18n="Layouts">Blogs</div>
                 </a>

                 <ul class="menu-sub">
                     <li class="menu-item {{ Request::routeIs('tags.*') ? 'active' : '' }}"><a class="menu-link"
                             href="{{ route('tags.index') }}">Tags</a></li>
                     <li class="menu-item {{ Request::routeIs('blogs.*') ? 'active' : '' }}"><a class="menu-link"
                             href="{{ route('blogs.index') }}">Blogs</a></li>
                 </ul>
             </li>

             <!-- Products -->
             <li class="menu-header small text-uppercase"><span class="menu-header-text">Product</span></li>
             <!-- Layouts -->
             <li
                 class="menu-item  {{ Request::routeIs('categories.*') || Request::routeIs('products.*') || Request::routeIs('ptags.*') ? 'active open' : '' }}">
                 <a href="javascript:void(0);" class="menu-link menu-toggle">
                     <i class="menu-icon tf-icons bx bxs-category-alt"></i>
                     <div data-i18n="Layouts">Product</div>
                 </a>

                 <ul class="menu-sub">
                     <li class="menu-item {{ Request::routeIs('categories.*') ? 'active' : '' }}"><a class="menu-link"
                             href="{{ route('categories.index') }}">Category</a></li>
                     <li class="menu-item {{ Request::routeIs('ptags.*') ? 'active' : '' }}"><a class="menu-link"
                             href="{{ route('ptags.index') }}">Product Tag</a></li>
                     <li class="menu-item {{ Request::routeIs('products.*') ? 'active' : '' }}"><a class="menu-link"
                             href="{{ route('products.index') }}">Product</a></li>
                 </ul>
             </li>


        <!-- Settings -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Settings</span></li>
        <!-- Layouts -->
        <li
            class="menu-item  {{ Request::routeIs('system.setting') || Request::routeIs('system.mail.*') || Request::routeIs('socialmedia.*') || Request::routeIs('dynamic_page.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('system.setting') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('system.setting') }}">System Settings</a></li>

                <li class="menu-item {{ Request::routeIs('system.mail.*') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('system.mail.index') }}">Mail Setting</a></li>

                {{-- <li class="menu-item {{ Request::routeIs('socialmedia.*') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('socialmedia.index') }}">Social Media</a></li> --}}

                <li class="menu-item {{ Request::routeIs('dynamic_page.*') ? 'active' : '' }}"><a class="menu-link"
                        href="{{ route('dynamic_page.index') }}">Add Dynamic Page</a></li>

                {{-- <li class="menu-item {{ Request::routeIs('stripe.*') ? 'active' : '' }} "><a class="menu-link"
                        href="{{ route('stripe.index') }}">Stripe</a></li> --}}
            </ul>
        </li>


        <li class="menu-item {{ Request::routeIs('profilesetting') ? 'active' : ' ' }}">
            <a class="menu-link" href="{{ route('profilesetting') }}">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Support">Profile Setting</div>
            </a>
        </li>

    </ul>
</aside>
