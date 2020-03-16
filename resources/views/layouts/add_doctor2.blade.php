@extends('layouts.app')

    
    {!! Form::open(array('url' => '/', 'method' => 'post')) !!}
    <table class="table-responsive">
        <tr>
            <td>URL自動生成名<br>URL generation</td>
            <td>{!! Form::text('url_generation', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>病気カテゴリー<br>Position</td>
            <td>{!! Form::select('position', array('L' => 'Illness_category', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
            <td>氏名<br>Name</td>
            <td>{!! Form::text('name', null , ['class' => 'form-control']) !!}</td>
        </tr>
         <tr>
            <td>所属診療科・所属科<br>Department</td>
            <td>{!! Form::select('department', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>ローマ字(名・氏)<br>Alphabet Name</td>
            <td>{!! Form::text('alpha_name', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>プロフィール画像<br>Profile image</td>
            <td>{!! Form::file('profile_img', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>出生地<br>Place of birth</td>
            <td>{!! Form::text('place_of_birth', null , ['class' => 'form-control']) !!}</td>
            <td>出身地</td>
            <td>{!! Form::text('birthday_place', null , ['class' => 'form-control']) !!}</td>
            <td>表示</td>
            <td>{!! Form::checkbox('place_of_birth_ok', null , ['class' => 'form-control']) !!} 出生地可</td>
            <td>{!! Form::checkbox('birthday_place_ok', null , ['class' => 'form-control']) !!} 出身地可</td>
            <td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 否</td>
        </tr>
        
      
        <tr>
            <td>画像キャプション<br>Image Caption</td>
            
        </tr>

        <table class="table" style="background-color:#aee4e4;">
	
</table>
        <tr>
            <td>画像alt<br>Image alt</td>
            <td>{!! Form::text('img_alt', null , ['class' => 'form-control']) !!}</td>
        </tr>
        
        <tr>
            <td>所属学会<br>Conference</td>
            <td>{!! Form::text('conference', null , ['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>生年月日<br>Birthday</td>
            <td>{!! Form::selectRange('coverage_year', 1990, 2019,null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::selectMonth('coverage_month',null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::selectRange('coverage_year', 1, 31,null ,['class' => 'form-control']) !!}</td>
            <td>表示<br>Display</td>
            <td>{!! Form::checkbox('ok', null , ['class' => 'form-control']) !!} 可</td>
            <td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 否</td>
            <td>{!! Form::checkbox('birthday_ok', null , ['class' => 'form-control']) !!} 生まれ年のみ可</td>
        </tr>
        
        <tr>
            <td>最後の行に現在に至る<br>Add“現在に至る”at line end</td>
			<td>{!! Form::checkbox('no', null , ['class' => 'form-control']) !!} 無<br>No</td>
        </tr>
        <tr>
            <td>所属病院・勤務先<br>Hospital・Office</td>
            <td>{!! Form::select('office', array('L' => 'Hospital office', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
        <tr>
            <td>エリア<br>Work location</td>
            <td>{!! Form::select('Prefectures', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
            <td>{!! Form::select('Prefectures', array('L' => '選択してください', 'S' => 'Small'),null ,['class' => 'form-control']) !!}</td>
        </tr>
       

        <tr>
            <td>医師コメント<br>Doctor Comment</td>
            <td colspan="3">{!! Form::textarea('doc_comment', null , ['class' => 'form-control']) !!}</td>
            <td colspan="3">
                <table class="table">
                    <tr>
                        <td>{!! Form::button('プレビュー', ['class' => 'btn btn-success']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::button('公開予約', ['class' => 'btn btn-warning']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::button('公開', ['class' => 'btn btn-info']) !!}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>




    {!! Form::close() !!}

@endsection