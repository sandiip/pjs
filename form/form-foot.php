   <script src="form/assets/js/jquery-3.3.1.min.js"></script>
    <script src="form/assets/js/popper.min.js"></script>
    <script src="form/assets/js/bootstrap.min.js"></script>
    <script src="form/assets/js/slick.min.js"></script>
    <script src="form/assets/js/main.js"></script>
    <script src="form/assets/js/switch.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile-image')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };
        $("#customFile").change(function() {
            filename = this.files[0].name
        });


        // alert
        const addButtonTrigger = (el) => {
            el.addEventListener('click', () => {
                const popupEl = document.querySelector(`.${el.dataset.for}`);
                popupEl.classList.toggle('popup--visible');
            });
        };
            Array.from(document.querySelectorAll('button[data-for]'))
           .forEach(addButtonTrigger); 


        //  login  pop up
      
			
    </script>
</body>
</html>