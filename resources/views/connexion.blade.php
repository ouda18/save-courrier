@extends('layout')
       @section('contenu')
       <form class="section" action="connexion" method="post">
                {{csrf_field()}}

                           <div class="field">
                                  <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="email"  name="email" placeholder="Email" value="{{old('email')}}">
                                      <span class="icon is-small is-left">
                                         <i class="fas fa-envelope"></i>
                                      </span>
                                      <span class="icon is-small is-right">
                                         <i class="fas fa-check"></i>
                                      </span>
                                    </p>
                                      @if($errors->has('email'))
                                      <p class="help is-danger">{{$errors->first('email')}}</p>
                                      @endif
                              </div>

                              <div class="field">
                                  <p class="control has-icons-left">
                                      <input class="input" type="password"  name="password"placeholder="Mot de passe">
                                        <span class="icon is-small is-left">
                                           <i class="fas fa-lock"></i>
                                        </span>
                                  </p>
                                      @if($errors->has('password'))
                                      <p class="help is-danger">{{$errors->first('password')}}</p>
                                      @endif
                              </div>


                              <div class="field">
                                    <p class="control">
                                        <button  type="submit"class="button is-success">
                                        Se connecter
                                      </button>
                                      <button  type="reset"class="button is-success">
                                       Effacer
                                    </button>
                                    </p>
                              </div>

           </form>
                   <div class="section" style="{float: right;}">
                     <a href="/deconnexion" class="button">Déconnexion</a>
                   </div>
       @endsection
