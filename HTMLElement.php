<?php
	class HTMLElement{
		private $tag, $attributes, $js, $text, $needsClosing;
		private $accepted_tags = [
				'a', 'div', 'img',
				'form', 'input', 'select', 'textarea',
				'button', 'label'
		];
		
		/**
		 * Initialize an HTML element
		 * @param assoc array $tag_data accepted keys:
		 * 						tag,
		 *                      attributes (assoc array),
		 *                      js,
		 *                      text,
		 *                      needsClosing (boolean)
		 */
		public function __construct($tag_data){
			$default = [
					'tag' => '',
					'attributes' => [],
					'js' => '',
					'text' => '',
					'needsClosing' => false
			];
			
			$tag_data = array_merge($default, $tag_data);
			
			$this->tag = $this->validate_tag($tag_data['tag']);
			$this->attributes = $tag_data['attributes'];
			$this->js = $tag_data['js'];
			$this->text = $tag_data['text'];
			$this->needsClosing = $tag_data['needsClosing'];
			
		}
			
		private function validate_tag($tag){
			if(in_array($tag, $this->accepted_tags)) return $tag;
			return 'span';
		}
		
		public function write(){
			$html = "<{$this->tag}";
			foreach($this->attributes as $attr => $val){
				$html .= " $attr=\"$val\"";
			}
			
			$html .= ">";
			if($this->needsClosing){
				$html .= $this->text;
				$html .= "</{$this->tag}>";
			}
			
			if($this->js){
				$html .= "<script>{$this->js}</script>";
			}
			
			return $html;
		}
	}
	
	/*
	<div id="ggg" class="sfjkgsf">text</div> 
	<script>
		$(function(){
			$('#ggg').on('click', function(){
				alert('Click!');
			});
		});
	</script>
	*/