<div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr>
                        <th>Comment</th>
                        <th>Commented By</th>
                        <th>Post Title</th>
                        
                    </tr>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{$comment['comment_text']}}</td>
                        <td>{{$comment->user['name']}}</td>
                        <td>{{$comment->post['title']}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>