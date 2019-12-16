<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="resources/css/kanban.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <script type="text/javascript" src="resources/js/kanban.js"></script>
        

        <script type="text/javascript">
$(document).ready(function() {
});
        </script>

    </head>
    <body>
        <div id="menu-bar" class="horizontal-list">
            <div><span>HOME</span><span>BOARDS</span><span>SEARCH</span></div>
            <div><span>LOGO</span></div>
            <div><span>CREATE</span><span>INFORMATION</span><span>NOTIFICATIONS</span><span>USER</span></div>
        </div>
        <div class="kanban-container">
            <div id="kanban-menu" class="horizontal-list">
                <div>
                    <span>KANBAN-NAME</span>
                    <span>FAVORITE-BUTTON</span>
                    <span class="divisor"></span>
                    <span>GROUP-NAME</span>
                    <span class="divisor"></span>
                    <span>VISIBILITY</span>
                    <span class="divisor"></span>
                    <span>BOARD-MEMBERS</span>
                    <span>INVITE-BUTTON</span>
                </div>
                <div>
                    <span>TOOLS</span>
                    <span>MENU</span>
                </div>
            </div>
            <div class="kanban-board">
                <?php for($col = 0; $col < rand(2, 5); $col++) { ?>
                <div class="kanban-column"><!-- Column Container -->
                    <div class="kanban-title"><!-- Column Title, etc. container -->
                        <p>Column Name</p>
                        <button>M</button>
                    </div>
                    <div class="card-container"><!-- Card Container -->
                        <?php for($row = 0; $row < rand(3, 7); $row++) { ?>
                        <div class="card"><!-- Actual Card -->
                            <div class="card-sticker-container"><!-- Sticker Container -->
                                <span class="card-sticker"></span>
                                <span class="card-sticker"></span>
                            </div>
                            <span class="card-title">Descriptive Item Name</span><!-- Card title  -->
                            <div class="card-badge-container"><!-- Badge Container -->
                                <span class="card-badge">BD</span>
                            </div>
                            <div class="card-member-container"><!-- Member Container -->
                                <?php for($member = 0; $member < rand(1, 3); $member++) { ?>
                                <span class="member-badge"><img src="resources/default-profile.jpg" alt="KH" /></span>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="add-card-container">
                        <span class="icon icon-sm cross"></span>
                        <span>Add a new card</span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>