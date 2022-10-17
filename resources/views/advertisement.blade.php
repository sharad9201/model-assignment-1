<div class="modal-dialog modal-dialog-scrollable">
                <table border="1px">
                    <tr>
                        <th>Advertisement</th>
                        <th>Advertisement on </th>
                        
                    </tr>
                    @foreach ($advertisements as $advertisement)
                    <tr>
                        <td>{{$advertisement['topic']}}</td>
                        <td>{{$advertisement->community['name']}}</td>

                    </tr>
                    @endforeach
                </table>
            </div>