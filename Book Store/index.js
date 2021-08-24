class Book{
  constructor(title, author, isbn){
    this.title = title;
    this.author = author;
    this.isbn = isbn;
  }
}

class UI{
  static displayBooks(){
    const books = Store.getBooks();

    books.foreach((book) =>
    UI.addBookToList(book));
  }

  static addBookToList(book){
    const list = document.querySelector('#book-list');

    const row = document.createElement('tr');

    row.innerHTML = `
    <td>${book.title}</td>
    <td>${book.author}</td>
    <td>${book.isbn}</td>
    <td><a href = "#" class = "btn btn-danger btn-sm delete">X</a></td>`;

    list.appendChild(row);
  }

  static deleteBook(el){
    if(el.className.contains('delete')){
      el.parentElement.parentElement.remove();
    }
  }

  static showAlert(message, className){
    const div = document.crea
  }
}