<?php

/**
 * Sqs同期処理コントロール
 * 
 * @package  app
 * @extends  Controller
 * @author shota inoue
 */
class Controller_Sqs extends Controller
{
  /**
   * メッセージ登録
   * 
   */
  public function action_add()
  {
	\Logic\Aws_Sqs::send_sqs_message("Hellow Sqs!!");
	$data['title'] = 'Sqsにメッセージを送信しました。';
	return View::forge('sqs/add',$data);

  }
}
