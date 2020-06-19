    <!-- Footer -->
    <footer class="py-5 bg-info">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; JOS TECH 2020</p>
        </div>
        </footer>
        <!-- END : Footer -->
    
        <!-- Bootstrap core JavaScript -->
        <script>
        function changeWide(){
                        document.getElementById("codelatte").className = "container-fluid";
                    }
                        function changeBoxed(){
                        document.getElementById("codelatte").className = "container ";
                    }
        </script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>