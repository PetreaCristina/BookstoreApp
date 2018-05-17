 <div class="panel-body js-book-row-{{ $book->id }}">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          Item
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Cover
                        </th>
                        <th>
                          Author
                        </th>
                        <th>
                          Genre
                        </th>
                        <th>
                          Year
                        </th>
                        <th>
                          Book location
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                      </tr>
                    </thead>
                    <tbody class="js-book-container">
                      <tr class="js-book-row-{{ $book->id }}">
                        <td>{{$book->id}}</td>
                        <td>{{{$book->title}}}</td>
                        <td>{{{$book->book_description}}}</td>
                        <td><img src="{{URL::to('/')}}/book1.jpg" alt="{{{$book->title}}}"></td>
                        <td>{{{$book->author_name}}}</td>
                        <td>{{{$book->genre}}}</td>
                        <td>{{{$book->publication_year}}}</td>
                        <td>{{{$book->location_download}}}</td>
                        <td><a href='delete/{{ $book->id }}' class="btn btn-danger btn-sm js-delete-row" data-id="{{ $book->id }}"  onclick="return confirm('Are you sure?')">Delete</a></td>
                        <td><a href='edit/{{ $book->id }}'class="btn-sm btn-primary" style="border: none;" data-id="{{ $book->id }}">Edit</a></td>
                      </tr>
                    </tbody>
                  </table>
</div>