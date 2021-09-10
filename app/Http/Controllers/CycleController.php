<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    //
     public function ReturnFormationByCycle($cycle){

       //variable pour recuperer la liste des formations de l'etablissement
      $cycles = Cycle::all();

       switch($cycle){

         case"cycle_bts":
           // retourner la vue
          return view('formation.cycle.cycle_bts', compact('cycles'));
          break;

          case"cycle_licence":
            return view('formation.cycle.cycle_licence', compact('cycles'));
            break;

            case"cycle_master":
              return view('formation.cycle.cycle_master', compact('cycles'));
              break;

              case"cycle_expertise":
                return view('formation.cycle.cycle_expertise', compact('cycles'));
                break;


       }
    }
    public function ReturnCycle_BtsByType($type){

      switch($type){

        case"cge":
          return view('formation.filiere.cge');
          break;
        
          case"glt":
            return view('formation.filiere.glt');
            break;
     
            case"gsi":
              return view('formation.filiere.gsi');
              break;

              case"com_ets":
                return view('formation.filiere.com_ets');
                break;
                
                case"mcv":
                  return view('formation.filiere.mcv');
                  break;

                  case"ama":
                    return view('formation.filiere.ama');
                    break;

                    case"dt":
                      return view('formation.filiere.dt');
                      break;

                      case"gp":
                        return view('formation.filiere.gq');
                        break;

                        case"tl":
                          return view('formation.filiere.tl');
                          break;

                          case"ba":
                            return view('formation.filiere.ba');
                            break;

                            case"mic_fin":
                              return view('formation.filiere.mic_fin');
                              break;

                              case"grh":
                                return view('formation.filiere.grh');
                                break;

                                case"ges_qual":
                                  return view('formation.filiere.ges_qual');
                                  break;

                                  case"com_int":
                                    return view('formation.filiere.com_int');
                                    break;

                                    case"assur":
                                      return view('formation.filiere.assur');
                                      break;

                                      case"bat":
                                        return view('formation.filiere.bat');
                                        break;

                                        case"topo":
                                          return view('formation.filiere.topo');
                                          break;

                                          case"chaudro":
                                            return view('formation.filiere.chaudro');
                                            break;

                                            case"genie_log":
                                              return view('formation.filiere.genie_log');
                                              break;

                                              case"froid_clim":
                                                return view('formation.filiere.froid_clim');
                                                break;

                                                case"iia":
                                                  return view('formation.filiere.iia');
                                                  break;

                                                  case"infos_ges":
                                                    return view('formation.filiere.info_ges');
                                                    break;

                                                    case"":
                                                      return view('formation.filiere.elec');
                                                      break;

                                                      case"":
                                                        return view('formation.filiere.reso_tel');
                                                        break;

                                                        case"":
                                                          return view('formation.filiere.reso_secu');
                                                          break;

                                                          case"":
                                                            return view('formation.filiere.maint_syst_info');
                                                            break;

                                                            case"":
                                                              return view('formation.filiere.expertiseComptable');
                                                              break;

                                                              case"":
                                                                return view('formation.filiere.softwareengineering');
                                                                break;

                                                                case"":
                                                                  return view('formation.filiere.telecommunication');
                                                                  break;

                                                                  case"":
                                                                    return view('formation.filiere.networkandsecurity');
                                                                    break;

                                                                    case"":
                                                                      return view('formation.filiere.marketingtradeandsales');
                                                                      break;

                                                                      case"":
                                                                        return view('formation.filiere.logisticsandtransportmanagement');
                                                                        break;

                                                                        case"":
                                                                          return view('formation.filiere.internationaltrade');
                                                                          break;

                                                                          case"":
                                                                            return view('formation.filiere.hardwaremaintenance');
                                                                            break;

                                                                            case"":
                                                                              return view('formation.filiere.bankingandfinance');
                                                                              break;

                                                                              case"":
                                                                                return view('formation.filiere.humanresourcemanagement');
                                                                                break;

                                                                                case"":
                                                                                  break;

                                                                                  case"":
                                                                                    break;
      };
    
 

}
 



public function ReturnCycle_licenceByType($type){

switch($type) {

    case"cp":
      return view('formation.filiere.cp');
      break;

      case"mmo":
        return view('formation.filiere.mmo');
        break;

        case"grh":
          return view('formation.filiere.grh');
          break;

          case"cca":
            return view('formation.filiere.cca');
            break;

            case"bcgc":
              return view('formation.filiere.bcgc');
              break;

              case"moci":
                return view('formation.filiere.moci');
                break;

                case"glt":
                  return view('formation.filiere.gl');
                  break;

                  case"rt":
                    return view('formation.filiere.rt');
                    break;

                    case"asr":
                      return view('formation.filiere.asr');
                      break;

                      case"irm":
                        return view('formation.filiere.irm');
                        break;

                        case"dt":
                          return view('formation.filiere.dt');
                          break;

                          case"gp":
                            return view('formation.filiere.gq');
                            break;

                            case"tl":
                              return view('formation.filiere.tl');
                              break;

                              case"ba":
                                return view('formation.filiere.ba');
                                break;

                                case"mcv3":
                                  return view('formation.filiere.mcv3');
                                  break;

                                  case"grh3":
                                    return view('formation.filiere.grh3');
                                    break;

                                  
}
}
}
