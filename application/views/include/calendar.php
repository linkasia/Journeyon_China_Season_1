<!DOCTYPE html>
<html lang="en">
<body class='default'>
    <div id='content'>
        <script type="text/javascript">
            $(document).ready(function () {
                // create jqxcalendar.
                $("#jqxWidget").jqxCalendar({ width: 220, height: 220,  selectionMode: 'range' });
                $("#jqxWidget").on('change', function (event) {
                    var selection = event.args.range;
                    $("#selection").html("<div>From: " + selection.from.toLocaleDateString() + " <br/>To: " + selection.to.toLocaleDateString() + "</div>");
                });

                var date1 = new Date();
                date1.setFullYear(2012, 7, 7);

                var date2 = new Date();
                date2.setFullYear(2012, 7, 15);
                $("#jqxWidget").jqxCalendar('setRange', date1, date2);
            });
        </script>
        <div id='jqxWidget'>
        </div>
        <div style='font-size: 13px; font-family: Verdana;' id='selection'></div>
    </div>
</body>
</html>