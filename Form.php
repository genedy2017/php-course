<?php
	class Form extends HTMLElement{
		private $html = '', $method, $url;
		
		public function __construct($method, $url){
			$this->method = $method;
			$this->url = $url;
		}
		
		public function addSubmit($name, $label){
			
		}
		
		public function addText($name, $label = '', $js = ''){
			if($label){
				$le = new HTMLElement([
						'tag' => 'label',
						'text' => $label,
						'needsClosing' => true
				]);
				$this->html .= $le->write();
			}
			
			$te = new HTMLElement([
					'tag' => 'input',
					'attributes' => [
							'name' => $name,
							'type' => 'text'
					]
			]);
			$this->html .= $te->write();
			
			$this->html .= '<br>';
		}
		
		public function write(){
			$form = new HTMLElement([
					'tag' => 'form',
					'attributes' => [
							'method' => $this->method,
							'action' => $this->url
					],
					'text' => $this->html,
					'needsClosing' => true
			]);
			
			return $form->write();
		}
	}