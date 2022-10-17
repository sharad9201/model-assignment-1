
<div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr > 
                        <th>Community Name</th>
                        <th>Community Description</th>
                        <th>Coummunity Posts</th>

                        
                    </tr>
                    @foreach ($communities as $community)
                    <tr>
                        <td>{{$community['name']}}</td>
                        <td>{{$community['description']}}</td>
                        <td>{{$community->post['title']}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>

