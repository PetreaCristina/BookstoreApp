console.log("public");
class Book {
  selectors = {
    book_container: `.js-book-container`,
    delete_button: `.js-delete-row`,
    edit_button: `.js-edit-row`
  };

  constructor () {
    this.init();
  }

  init () {
    this.initDeleteBookClickListener();
    this.initEditBookClickListener();
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