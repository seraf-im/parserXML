<?php

declare(strict_types=1);

###############################################################################################################
###############################################################################################################
##                                                                                                           ##
##  ######################     #####            #####     #####            #####     ######################  ##
##  ######################     #####            #####     #####            #####     ######################  ##
##  ######################     ######           #####     #####            #####     ######################  ##
##  ######################     #######          #####     #####            #####     ######################  ##
##  ######################     ########         #####     #####            #####     ######################  ##
##  #####            #####     #########        #####     #####            #####     #####                   ##
##  #####            #####     ##########       #####     #####            #####     #####     .COM.BR       ##
##  #####            #####     ##### #####      #####     ######################     ######################  ##
##  #####            #####     #####  #####     #####     ######################     ######################  ##
##  ######################     #####   #####    #####     ######################     ######################  ##
##  ######################     #####    #####   #####     ######################     ######################  ##
##  ######################     #####     #####  #####     ######################     ######################  ##
##  ######################     #####      ##### #####     #####            #####                      #####  ##
##  ######################     #####       ##########     #####            #####                      #####  ##
##  #####                      #####        #########     #####            #####     ######################  ##
##  #####                      #####         ########     #####            #####     ######################  ##
##  #####                      #####          #######     #####            #####     ######################  ##
##  #####                      #####           ######     #####            #####     ######################  ##
##  #####                      #####            #####     #####            #####     ######################  ##
##                                                                                                           ##
###############################################################################################################
##                   TODOS OS DIREITOS RESERVADOS  O SENHOR E MEU PASTOR E NADA ME FALTAR??                   ##
###############################################################################################################
###############################################################################################################
###############################################################################################################
##                                          INICIO C??DIGO DE FONTE!                                          ##
###############################################################################################################

namespace Pnhs\ParserXml\layout;

use stdClass;
use Pnhs\ParserXml\enums\{
  Uf,
  IndPag,
  Mod,
  TpNF,
  IdDest,
  TpImp,
  TpEmis,
  TpAmb,
  FinNFe,
  IndFinal,
  IndPres,
  IndIntermed,
  ProcEmi
};

class m
{
  public static function run(object $data, int $numero_item, $std = new stdClass): stdClass
  {
    $parser = $data->NFe->infNFe->det->imposto[$numero_item - 1];

    $std->valor_total_tributos                  = (string) $parser->vTotTrib;
    return $std;
  }
}
