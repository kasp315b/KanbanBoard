console.log("Hello World!");

$(document).ready(function () {
    createDraggableCards();
});


function createDraggableCards() {
    $('.card').attr('draggable', 'true');

    var currentlyDragging = null;
    var currentlyHovering = null;

    $('.card').on({
        drag: function(event) {
            // Empty
        },
        dragstart: function(event) {
            if($(event.target).hasClass('card')) {
                currentlyDragging = $(event.target);
            }
        },
        dragend: function(event) {
            currentlyDragging = null;
        }
    });

    $(document).on({
        dragover: function(event) {
            event.preventDefault();

            var parentColumn = null;

            if($(event.target).hasClass('kanban-column')) {
                parentColumn = $(event.target);
            } else {
                parentColumn = $(event.target).parents('.kanban-column');
            }

            if(parentColumn.length > 0) {
                currentlyHovering = parentColumn;
            } else {
                currentlyHovering = null;
            }
        },
        dragenter: function(event) {
            event.preventDefault();
        },
        dragleave: function(event) {
        },


        drop: function(event) {
            if(currentlyHovering != null) {
                currentlyDragging.appendTo(currentlyHovering.find('.card-container')[0]);
            }
        }
    });
}