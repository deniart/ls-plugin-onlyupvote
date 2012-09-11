<?php

class PluginOnlyupvote_ActionAjax extends PluginOnlyupvote_Inherit_ActionAjax {
	protected function EventVoteUser() {
		if (!$this->oUserCurrent) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}

		$iValue = getRequest('value',null,'post');
		if ( $iValue == -1 and (!$this->oUserCurrent->isAdministrator() or ($this->oUserCurrent->isAdministrator() and !Config::Get('plugin.onlyupvote.admin_allow_downvote')))) {
			$this->Message_AddErrorSingle( $this->Lang_Get('plugin.onlyupvote.comment_vote_error_value_down'), $this->Lang_Get('attention') );
			return Router::Action('error');
		} else {
			return parent::EventVoteUser();
		}
	}
	
	protected function EventVoteComment() {
		if (!$this->oUserCurrent) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}

		$iValue = getRequest('value',null,'post');
		if ( $iValue == -1 and (!$this->oUserCurrent->isAdministrator() or ($this->oUserCurrent->isAdministrator() and !Config::Get('plugin.onlyupvote.admin_allow_downvote')))) {
			$this->Message_AddErrorSingle( $this->Lang_Get('plugin.onlyupvote.comment_vote_error_value_down'), $this->Lang_Get('attention') );
			return Router::Action('error');
		} else {
			return parent::EventVoteComment();
		}
	}
	
	protected function EventVoteTopic() {
		if (!$this->oUserCurrent) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}

		$iValue = getRequest('value',null,'post');
		if ( $iValue == -1 and (!$this->oUserCurrent->isAdministrator() or ($this->oUserCurrent->isAdministrator() and !Config::Get('plugin.onlyupvote.admin_allow_downvote')))) {
			$this->Message_AddErrorSingle( $this->Lang_Get('plugin.onlyupvote.comment_vote_error_value_down'), $this->Lang_Get('attention') );
			return Router::Action('error');
		} else {
			return parent::EventVoteTopic();
		}
	}

	protected function EventVoteBlog() {
		if (!$this->oUserCurrent) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}

		$iValue = getRequest('value',null,'post');
		if ( $iValue == -1 and (!$this->oUserCurrent->isAdministrator() or ($this->oUserCurrent->isAdministrator() and !Config::Get('plugin.onlyupvote.admin_allow_downvote')))) {
			$this->Message_AddErrorSingle( $this->Lang_Get('plugin.onlyupvote.comment_vote_error_value_down'), $this->Lang_Get('attention') );
			return Router::Action('error');
		} else {
			return parent::EventVoteBlog();
		}
	}
}