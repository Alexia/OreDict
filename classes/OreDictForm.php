<?php
/**
 * OreDictForm class file
 *
 * @file
 * @ingroup Extensions
 * @version 1.0.1
 * @author Jinbobo <paullee05149745@gmail.com>
 * @license
 */

class OreDictForm {
	/**
	 * Helper function for creating form rows
	 *
	 * @param string $ext Submodule name
	 * @param string $name Field name
	 * @param string $value Default value
	 * @param string $type Input type
	 * @param string $attr Input attributes
	 * @param string $lattr Label attributes
	 * @return string
	 */

	static public function createFormRow($ext, $name, $value = "", $type = "text", $attr = "", $lattr = "") {
		$msgName = wfMessage("oredict-$ext-$name")->text();
		$html = "<tr>
					<td style=\"text-align:right; width:200px;\">
						<label for=\"$name\" $lattr>$msgName</label>
					</td>
					<td>
						<input type=\"$type\" name=\"$name\" id=\"$name\" value=\"$value\" $attr>
					</td>
				</tr>";
		return $html;
	}

	/**
	 * Helper function for creating submit buttons
	 *
	 * @param string $ext Submodule name
	 * @param string $msg System message name
	 * @return string
	 */

	static public function createSubmitButton($ext, $msg = "submit") {
		return "<tr>
					<td colspan=\"2\">
						<input type=\"submit\" value=\"".wfMessage("oredict-$ext-$msg")->text()."\">
					</td>
				</tr>";
	}

	/**
	 * Helper function for displaying input hints
	 *
	 * @param string $ext Submodule name
	 * @param string $name Field name
	 * @return string
	 */

	static public function createInputHint($ext, $name) {
		return "<tr>
					<td colspan=\"2\" class=\"htmlform-tip\">
						".wfMessage("oredict-$ext-$name-hint")->parse()."
					</td>
				</tr>";
	}

	/**
	 * Helper function for creating checkboxes
	 *
	 * @param string $ext
	 * @param string $name
	 * @param string $value
	 * @param bool $checked
	 * @param string $attr
	 * @param string $lattr
	 * @return string
	 */

	static public function createCheckBox($ext, $name, $value, $checked = false, $attr = "", $lattr = "") {
		$msgName = wfMessage("oredict-$ext-$name");
		$attr = $checked ? $attr." checked=\"checked\"" : $attr;
		$html = "<tr>
					<td style=\"text-align:right\">
						<label for=\"$name\" $lattr>$msgName</label>
					</td>
					<td>
						<input type=\"checkbox\" id=\"$name\" value=\"$value\" $attr>
					</td>
				</tr>";
		return $html;
	}
}
