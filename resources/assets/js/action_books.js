console.log("resources");
class Book {
  selectors = (
    book_container: `.js-book-container`,
    delete_button: `.js-delete-row`,
    edit_button: `.js-edit-row`
  );

  constructor () {
    this.init();
  }

  init () {
    this.initDeleteBookClickListener();
    this.initEditBookClickListener();

  }



  getNewRow () {
    let self = this;

    $.ajax({
      type: 'get',
      url: '/get-new-book-row',
      data: {},
      dataType: 'json',
      success: function (data) {
        $(self.selectors.book_container).append(data.html);
      },
      error: function () {
        console.log(`An error occurred.`);
      }
    });
  }

  initDeleteBookClickListener () {
  console.log("Delete");
    let self = this;

    $(this.selectors.book_container).on('click', this.selectors.delete_button, function () {
      let exists = $(this).data('exists'),
        id = $(this).data('id'),
        parent = $(this).parents(`.js-book-row-${id}`);

      self.removeRow(exists, id, parent);
    });
  }

  removeRow (rowExists, id, parent) {
console.log("Delete2");
    if (rowExists === 0 && id === 0) {
      parent.remove();
      return;
    }

    $.ajax({
      type: 'get',
      url: `/delete-book-record/${id}`,
      data: {},
      dataType: 'json',
      success: function (data) {
        parent.remove();
        alert(data.message);
      },
      error: function () {
        console.log(`Delete book error`);
      }
    });
  }

 


}

new Book();