
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="/">Kawill Automation</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script>
    function updateTextarea() {
        // Get the content from the editor
        const editorContent = document.querySelector('.editor1').innerHTML;
        // Get the textarea and update its value
        const textarea = document.querySelector('.output-textarea1');
        textarea.value = editorContent;
    }

    // Insert Table Function
    function insertTable() {
        const rows = prompt("Enter number of rows:", "2");
        const cols = prompt("Enter number of columns:", "2");

        if (rows && cols) {
            let table = "<table class='table table-light table-bordered' cellpadding='5' cellspacing='0'>";
            for (let i = 0; i < rows; i++) {
                table += "<tr>";
                for (let j = 0; j < cols; j++) {
                    table += "<td>&nbsp;</td>"; // Empty cells
                }
                table += "</tr>";
            }
            table += "</table>";

            // Insert the table at the current cursor position
            document.execCommand('insertHTML', false, table);
        }
    }
</script>
    <script src="quixlab-adminpanel/plugins/common/common.min.js"></script>
    <script src="quixlab-adminpanel/js/custom.min.js"></script>
    <script src="quixlab-adminpanel/js/settings.js"></script>
    <script src="quixlab-adminpanel/js/gleek.js"></script>
    <script src="quixlab-adminpanel/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="quixlab-adminpanel/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="quixlab-adminpanel/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="quixlab-adminpanel/plugins/d3v3/index.js"></script>
    <script src="quixlab-adminpanel/plugins/topojson/topojson.min.js"></script>
    <script src="quixlab-adminpanel/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="quixlab-adminpanel/plugins/raphael/raphael.min.js"></script>
    <script src="quixlab-adminpanel/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="quixlab-adminpanel/plugins/moment/moment.min.js"></script>
    <script src="quixlab-adminpanel/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="quixlab-adminpanel/plugins/chartist/js/chartist.min.js"></script>
    <script src="quixlab-adminpanel/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="quixlab-adminpanel/js/dashboard/dashboard-1.js"></script>
    <script src="quixlab-adminpanel/plugins/summernote/dist/summernote.min.js"></script>
    <script src="quixlab-adminpanel/plugins/summernote/dist/summernote-init.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/quixlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 May 2025 12:32:30 GMT -->

</html>