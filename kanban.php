<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="resources/css/kanban.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="resources/js/kanban.js"></script>
        

        <script type="text/javascript">
$(document).ready(function() {
    $('button').on('click', function(e) {
        $('#con').append($('<span>TEST</span>'));
    });
});
        </script>
    </head>
    <body>
        <div id="menu-bar" class="horizontal-list">
            <div><span>L1</span><span>L2</span><span>L3</span></div>
            <div><span>M1</span><span>M2</span><span>M3</span></div>
            <div><span>R1</span><span>R2</span><span>R3</span></div>
        </div>
        <div class="kanban-container">
            <div id="kanban-menu" class="horizontal-list">
                <div><span>Kanban-menu</span></div>
            </div>
            <div id="kanban-board">
                <div class="kanban-column">
                    <div>
                        <p>Kolonne 1</p>
                        <button>M</button>
                    </div>
                    <div id="con">
                        <span>C1I1</span>
                        <span>C1I2</span>
                        <span>C1I3</span>
                        <span>C1I4</span>
                        <span>C1I5</span>
                        <span>C1I6</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>