<ul>
<bp:foreach in="items" as="item" index="type">
	<bp:if value="item[active]">
		<span class="selected"><bp:$item[title]/></span>
	</bp:if>

	<bp:if value="item[active]" is="World">
		You should not see me.
	</bp:if>
	<bp:elseif value="item[active]" is="Kitty">
		<font color="#FFAACC"><bp:$subject/></font>
	</bp:elseif>
	<bp:else>
		Me too.
	</bp:else>
</bp:foreach>
</ul>
