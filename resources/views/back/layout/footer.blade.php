<footer class="sticky-footer" style="
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 50px;
    padding:15px;
    background-color:rebeccapurple">
    <div  class="container my-auto">
            <div class="copyright text-center my-auto">
                <span id="footer_text" style="color: whitesmoke;">Copyright &copy; Forma Mobil {{date('Y')}}</span>
            </div>
    </div>
</footer>
</div>
</div>
<script src="{{asset('back/')}}/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{asset('back/')}}/dist/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('back/')}}/dist/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="{{asset('back/')}}/dist/assets/js/pages/dashboard.js"></script>
<script src="https://kit.fontawesome.com/1a97f5f163.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="{{asset('back/')}}/dist/assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@jquery
@toastr_js
@toastr_render
@yield('js')
</body>

</html>
