<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������");
?> 
<p>��������-������� ��������� �������� ������ ������ ����� ����������� ������� ��������.</p>
 
<h3>��������� �������� ��������</h3>
 
<p>��������� �������� ������ �� ������ �������� - 500 ���, ��� ������� ������ ��� ������ ������ � �������� ������� �������� ����� ��������.</p>
 
<h3>����� ��������</h3>
 
<p>����� �������� ��������������� � ���������� ������ ��������, ������� ����������� �������� � ���� ����� ����� ����, ��� �� ���������� ���� �����. </p>
 
<p><b>��������!</b> ����������� ��������� ����� ��������, �������� ��� �������� ����� ����� �������� � �������������� ��������! ����������, ����������� ���������� ���� ������������ ������ ��� ����������� � ���������� ������.������������������ ����� ��������������� ������ �������������.</p>
 
<p>�������� ����������� ��������� � 10:00 �� 20:00 �����, � ������� � 10:00 �� 14:00, � ����������� �������� ���. ������, ���������� ���� � ������� � �����������, ������������ � �����������. ����� ������������� �������� ������� �� ������� ���������� ������ � ������� ������ �� ������:</p>
 
<ul> 
  <li>���� ����� ����������� ���������� ������ �������� �� 12:00, ����� ����� ���� ��������� �� ��������� ������� ���� ����� 10:00 � 15:00 ��� ����� 15:00 � 20:00;</li>
 
  <li>���� ����� ����������� ���������� ������ �������� ����� 12:00, ����� ����� ���� ��������� �� ��������� ������� ���� ����� 15:00 � 18:00.</li>
 </ul>
 
<p>�� ����� ������ ������� ����� ������ ������� ����� ��������, � ������� ����� ���������� � ������� ��� �����. ���� ����� ��������, � ����� ����� �������� � ���������� ������ ������� ������������ �� �������������� � ��������.</p>
 
<h3>����� ��������</h3>
 
<p>�������� �������������� �� ������, ���������� ��� ���������� ������. ���� ���������� ��������� ����� �� ����� ������, ���������� �������� ����� ��������� ������ ��������, ������� �������� � ���� ��������������� ����� ���������� ������ �� �����.</p>
 
<h3>�������</h3>
 
<p>��� �������� ��� ����� �������� ��� ����������� ��������� �� �������: ��������, �������� ����, � ����� ����������� �����.��� ���������� ������� �� �����������, ��� ����� �������� ����-�������, � ����� ���������, � ������� ���������� ��������� ������ ����� �����������.����, ��������� � ���������� ��� �������� ����������, �������� �������������, ������ �� �������� ������ ������������� ����.��������� �������� ���������� � ���������� �� ������� ��������� ������.</p>
 
<p><b>��������!</b> ������ ��� �������, ��� ��� ����������� ��������� � ��������������� �������� �������������� ������ ��� ������� �������� � ������ ��������� �� ������� ������� ������. � ����������� ���������� ������ �������� �� ������ ������������� ������������ � ������������ ������������ ��������������� ������� ������. ��� ������������� ����������� �������������� � ����� �������� ������ ��� ���������� �������� �� ���� ������ ���������.��� �������� ��� ����������� ������ ���������� ������������� ������������� ������, ����������������� ������, ������������ ������������� ������ �������� �� ����� �����, ����� ��������� ����� �� ������� ������������ �����������. ��� �� ��������� ���� ��� ��������� ������ ��������� �� ������ ������������ �����������, � ���������� �������� ��������� �� ���������������.� ������ ��������, ��������� � ��������� ����������� � ��� �� ��������� �����������:</p>

  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "#SITE_DIR#include/delivery.php",
		"EDIT_TEMPLATE" => ""
	),
false
);?> 

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>