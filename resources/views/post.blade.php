<div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr>
                        <th>Postion</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Posted By</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post['position']}}</td>
                        <td>{{$post['status']}}</td>
                        <td>{{$post['description']}}</td>
                        <td>{{$post->user['name']}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>