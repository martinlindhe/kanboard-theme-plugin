<style>
#form-application_stylesheet {width:100%; resize:vertical;}

.activity-task-title {font-weight:bold; margin-bottom:5px; text-decoration:underline;}

.comments {display:flex;  flex-flow:row wrap;}
.comments > * {width: 100%;}
.comments > form {padding-bottom:10px; margin-bottom:10px; border-bottom:1px solid #e6e6e6;}
.comments .comment {order:2;}

#modal-header {margin-top:5px;}

.task-board {border: 0; box-shadow: 1px 1px 3px rgba(72, 72, 72, 0.3); padding: 5px; margin-bottom: 6px;}
.task-board:hover {box-shadow: 2px 2px 4px rgba(72, 72, 72, 0.3);}
.task-board-title {padding-left: 3px;}
.task-board-title a {color: #636262;}

#board tr[class^="board-swimlane-columns"] {box-shadow: 0 2px 2px rgba(107, 107, 107, 0.5);}
#board th.board-column-header {height: 32px; background-color: rgba(233, 233, 233, 0.43);}
.board-swimlane-header {background-color: rgba(233, 228, 228, 0.18);}
.board-swimlane td {border: 0; padding: 15px 7px;}
.board-swimlane td:nth-child(even) {background-color: rgba(233, 228, 228, 0.18);}
.board-swimlane td:nth-child(odd) {background-color: rgba(147, 163, 193, 0.08);}

.board-add-icon {padding-right: 0;}
.board-add-icon i {font-size: 16px;}

.logo a {font-weight: bold; font-size: 26px; text-shadow: 1px 1px 3px #927171;}

header .menus-container {padding-top: 5px;}
.task-board-header a.js-modal-large {border-radius: 10px; position: absolute; left: 40px; width: calc(100% - 45px); text-align: right;}
.task-board-header a.js-modal-large:hover {background-color: rgba(200,200,200,0.2);}
.task-board-header .task-board-avatars {position: relative; margin-top: 22px;}
.task-board-header .avatar-letter {box-shadow: 1px 1px 2px #9e6a6a;}
.task-board-icons a:hover {font-weight: normal;}
.task-board-icons span:hover {opacity: 1;}

.draggable-placeholder {border: 1px dotted black;}


.select2-container--default .select2-selection--multiple .select2-selection__choice {
 /** less sharp tag border */
 border: 1px solid #dddddd;
}
.task-tags li {
 /** less sharp tags */
 color: #333;
 border: 1px solid #666;
 opacity: 0.5;
}
.btn-blue {
    /* button glow */
 border-color: rgba(82,168,236,0.8);
 box-shadow: 0 0 8px rgba(82,168,236,0.6);
}
input[type="number"], input[type="date"], input[type="email"], input[type="password"], input[type="text"]:not(.input-addon-field), textarea {
   /* rounded input fields - less "hard" look */
   border-radius: 5px;
}

/* top menu & left menu tweaks */
.page {
    padding: 0px;
    margin: 0px;
}
.page-header {
    padding-top: 5px;
    border-bottom: 1px solid #dedede;
    background-color: #fbfbfb;
}
.page-header ul {
    padding-bottom: 10px;
    opacity: 0.5;
}
.page-header ul a {
    text-decoration: none;
    color: #333;
}
.sidebar {
    padding-left: 10px;
}
.sidebar-content {
    padding-right: 10px;
}
header {
    margin-bottom: 0px;
}
</style>
