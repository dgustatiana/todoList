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
        padding-top: 5px;
        padding-bottom: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: rgb(180,220,100);
        margin-bottom: 0;
		text-align: center;
    }
    .lien{
		margin-right: -110px;
        color: black;
		margin-right: 5%;
    }
    h1
    {
        text-align: center;
    }
    p{
		text-align: left;
        margin-top: -15px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background: rgb(150,190,70);
		height:100px;
    }
    .bordure
    {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }

</style>

@section('contenu')
    <h1 style="border-bottom:2px rgb(180,220,100) solid; padding-bottom:20px;">Mes tâches</h1>
    <div class="row">

    @foreach($tasks as $task)
    <div class="bordure">
        <div class="col-md-4 portfolio-item">
			<h3 class="titre_tache">
              <a class="lien" id="{{$task->id}}">{{$task->name}}</a>
			</h3>
       <p>{{$task->descriptionTache}}

           @if($lists->where('task_id',$task->id) )
              <a style="color:red;">{{$lists->where('Accompli',1)->where('task_id',$task->id)->where('user_id',Auth::user()->id)->count()}}
                  {{"/".$lists->where('task_id',$task->id)->where('user_id',Auth::user()->id)->count()}}
              </a>  @endif

           <br>
         Créé le:  {{$task->created_at}}
           <br>
          <a href="{{URL::to('/SeeSousTask/'.$task->id)}}">Voir vos sous-tâches</a>
		  <br>
            <a type="button" style="margin-top:2px; float:left; margin-left:10px; background:rgb(255,120,120);" class="btn btn-primary btn-sm" href="{{URL::to('/update/'.$task->id)}}">Editer</a>
            <a type="button" style="border-radius:15px; width:52%; float:left; margin-left:3%; margin-top:2px; background:rgb(128,128,255);" class="btn btn-primary btn-sm" href="{{URL::to('/NewTask/'.$task->id)}}">Ajouter une sous-tâche à {{$task->name}}</a>
            <a type="button" style="margin-top:2px; float:right; margin-right:10px; background:rgb(255,120,120);" class="btn btn-danger btn-sm" href="{{URL::to('/Delete/'.$task->id)}}">Supprimer</a>
       </p>
<br>
        </div>
    @endforeach
    </div>

    </div>
@endsection