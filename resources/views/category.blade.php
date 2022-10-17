
<div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr > 
                        <th>Business Name</th>
                        <th>Entertainment</th>
                        <th>Modals</th>
                        <th>Posted With Title</th>


                        
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category['business']}}</td>
                        <td>{{$category['entertainment']}}</td>
                        <td>{{$category['modal']}}</td>
                        <td>{{$category->post['title']}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>

