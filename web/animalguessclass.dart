import 'package:polymer/polymer.dart';
import 'dart:html';
import 'dart:convert';


/**
 * A Polymer click counter element.
 */
@CustomTag('animal-guess')
class AnimalGuess extends PolymerElement {
  @published bool gameinprogress=false;
  @published String question='';
  @published int qid=1;
  int yBranch;
  int nBranch;

  AnimalGuess.created() : super.created() {
  }

  void newGame() {
    gameinprogress=true;
    
    getQuestionById(qid);
  }
  
  void getQuestionById(qid)
  {
    var path='http://rsywx/app_dev.php/animal/getQuestionById/$qid';
    var req=new HttpRequest();
    req..open('GET', path)
      ..onLoadEnd.listen((e)=>requestComplete(req))
      ..send('');
  }
  
  void YBranch()
  {
    getQuestionById(yBranch);
    qid=yBranch;
  }
  
  void NBranch()
  {
    getQuestionById(nBranch);
    qid=nBranch;
  }
  
  void requestComplete(HttpRequest req)
  {
    if (req.status==200)
    {
      Map res=JSON.decode(req.responseText);
      question=res['q'];
      yBranch=res['y'];
      nBranch=res['n'];
      
      if (yBranch==-1 && nBranch==-1) // No more branches and we have reached the "guess"
      {
        question='Is it a/an $question?';
      }
    }
  }
}

