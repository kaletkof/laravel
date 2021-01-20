@extends('layout.main')


@section('content')
    <h2>User list</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nick</th>
                <th>Opcje</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="3">FOREACH</td></tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>
                            <a href="{{ 
                                route('get.user.show', [
                                    'userId' => $user['id']
                                ]) 
                            }}"
                            >Szczegóły
                        </td>
                    </tr>
                @endforeach

                <tr><td colspan="3">FOR</td></tr>
                @for ($i = 0; $i < count($users); $i++)
                    <tr>
                        <td>{{ $users[$i]['id'] }}</td>
                        <td>{{ $users[$i]['name'] }}</td>
                        <td>
                            <a href="{{ 
                                route('get.user.show', [
                                    'userId' => $users[$i]['id']
                                ]) 
                            }}"
                            >Szczegóły
                        </td>
                    </tr>
                @endfor

                <tr><td colspan="3">FORELSE</td></tr>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>
                            <a href="{{ 
                                route('get.user.show', [
                                    'userId' => $user['id']
                                ]) 
                            }}"
                            >Szczegóły
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Lista jest pusta</td>
                    </tr>
                @endforelse

                <tr><td colspan="3">WHILE</td></tr>
                @php 
                    $j = 0;
                    $count = count($users);
                @endphp
                @while ($j <  $count)
                    <tr>
                        <td>{{ $users[$j]['id'] }}</td>
                        <td>{{ $users[$j]['name'] }}</td>
                        <td>
                            <a href="{{ 
                                route('get.user.show', [
                                    'userId' => $users[$j]['id']
                                ]) 
                            }}"
                            >Szczegóły
                        </td>
                    </tr>
                    @php 
                        $j++;
                    @endphp
                @endwhile
        </tbody>
    </table>
@endsection