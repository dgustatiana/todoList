@extends('template')

@section('titre')
    Liste
@endsection
<style>
    .portfolio-item {
        margin-bottom: 20px;
        margin-left:auto;
        margin-right: auto;
        max-width: 400px;

    }
    .titre_tache{
        padding-bottom: 2px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: rgb(180,220,100);
        margin-bottom: 0;
        height: 35px;
        text-align: center;
    }
    .lien{
       text-align: center;
        margin-right: -50px;
        color: black;
    }
    h1
    {
        text-align: center;
    }
    p{text-align: center;
        margin-top: -15px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background: rgb(150,190,70);
    }
    .bordure
    {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }
#row
{
    margin-left:0;
    margin-right:0;
}
</style>
@section('contenu')

    <h1>Sous tâche(s)</h1>
    <div class="row" id="row" style="margin-left:0;margin-right:0;" >

        @foreach($lists->where('user_id',Auth::user()->id) as $list)
            <div class="bordure">
                <div class="col-md-4 portfolio-item">
<h3 class="titre_tache">
    <a class="lien">{{$list->name}}</a>
    @if($list->Accompli==0)
    <a type="button" style="margin-top:2px; float: right; margin-right: 3px; background:rgb(128,128,255);" class="btn btn-info btn-sm" href="{{URL::to('/SousTacheFin/'.$list->id)}}">Terminer</a>
@endif


</h3>
      <p style="height:35px;">Date de fin: {{$list->DateCrea}}
          <a type="button" style="margin-top:2px;float: right;margin-right: 3px; background:rgb(255,120,120);" class="btn btn-danger btn-sm" href="{{URL::to('/deleteStache/'.$list->id)}}">Supprimer</a>
          <a type="button" style="margin-top:2px;float: left;margin-left: 3px; background:rgb(255,120,120);" class="btn btn-primary btn-sm" href="{{URL::to('/vieweditSTache/'.$list->id)}}">Editer</a>

      </p>
                </div>
                @endforeach
            </div>

    </div>
@endsection